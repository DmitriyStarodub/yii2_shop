<?php
namespace app\controllers;
use app\models\Section;
use app\models\Product;
use app\models\MyFilter;
use app\models\Review;
use app\models\EntryFormReview;
use Yii;


class ProductController extends AppController {

    public function actionGoods() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        $id = Yii::$app->request->get('id');
        $goods = NULL;
        $query = NULL;
        if (Section::find()->with('photo')->where(['parentSection_id' => $id])->one() == NULL) {
            $subsections = Section::find()->with('photo')->where(['Id' => $id])->one();
            $query = Product::find()->with('photo', 'characteristic')->where(['section_id' => $id])->select('id, name, description');
            $pages = new \yii\data\Pagination(
                    ['totalCount' => $query->count(),
                'pageSize' => 20,
                'pageSizeParam' => false,
                'forcePageParam' => false]
            );
            $goods = $query->offset($pages->offset)->limit($pages->limit)->all();
        }
        $sections = Section::find()->with('photo')->where(['parentSection_id' => NULL])->select('id, name')->all();
        $filter = Section::find()->with('myFilter')->where(['id' => $id])->all();
        $filterItem = MyFilter::find()->with('myFilterItem')->all();
        return $this->render('goods', compact('sections', 'charakteristik', 'tmpFilterProduct', 'filterProduct', 'subsections', 'pages', 'goods', 'filter', 'filterItem', 'filtertest'));
    }

    public function actionItem() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        $id = \Yii::$app->request->get('id');
        $good = Product::find()->with('photo', 'characteristic')->where(['id' => $id])->one();
        $reviews = Review::find()->where(['product_id' => $id])->all();
        $subsections_id = Section::find()->where(['id' => $good->section_id])->select('parentSection_id')->one();
        $subsection_id = $subsections_id->parentSection_id;
        
        $newReview = new EntryFormReview();
         if ($newReview->load(Yii::$app->request->post()) && $newReview->validate()) {
            // данные в $newReview удачно проверены
             return $this->redirect(array('additionconfirm','user'=>$newReview->name));
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
        }
        
        return $this->render('item', compact('good', 'subsection_id', 'reviews', 'newReview'));
    }
    
    public function actionAdditionconfirm($user = 'Гость'){
        return $this->render('additionconfirm', compact('user'));
    }

}

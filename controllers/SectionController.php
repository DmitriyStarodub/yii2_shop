<?php

namespace app\controllers;

use app\models\Section;
//use app\models\Product;
//use app\models\ProductPhoto;
//use app\controllers\Post;

class SectionController extends AppController {

     
    public function actionIndex() {                          // надо разделить метод
       \Yii::$app->view->params = $this->GetItemsDrobDounMain();               
        $id = \Yii::$app->request->get('id');
        if ($id == NUll) {
            $query = Section::find()->with('photo')->where(['parentSection_id' => NULL])->select('id, name, description, parentSection_id')->orderBy('id');
            $pages = new \yii\data\Pagination(
                    ['totalCount' => $query->count(),
                'pageSize' => 9,
                'pageSizeParam' => false,
                'forcePageParam' => false]
            );
            $subsections = $query->offset($pages->offset)->limit($pages->limit)->all();
        } elseif (Section::find()->with('photo')->where(['parentSection_id' => $id])->one() != NULL) {
            $query = Section::find()->with('photo')->where(['parentSection_id' => $id])->select('id, name, description, parentSection_id')->orderBy('id');
            $pages = new \yii\data\Pagination(
                    ['totalCount' => $query->count(),
                'pageSize' => 9,
                'pageSizeParam' => false,
                'forcePageParam' => false]
            );
            $subsections = $query->offset($pages->offset)->limit($pages->limit)->all();
        }elseif (Section::find()->with('photo')->where(['id' => $id])->all() == NUll) {
            $query = Section::find()->with('photo')->where(['parentSection_id' => NULL])->select('id, name, description, parentSection_id')->orderBy('id');
            $pages = new \yii\data\Pagination(
                    ['totalCount' => $query->count(),
                'pageSize' => 9,
                'pageSizeParam' => false,
                'forcePageParam' => false]
            );
            $subsections = $query->offset($pages->offset)->limit($pages->limit)->all();
        }

        $sections = Section::find()->with('photo')->where(['parentSection_id' => NULL])->all();
        return $this->render('index', compact('section', 'sections', 'subsections', 'id', 'pages'));
    }

    public function actionCatalog() {
       \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        $sections = Section::find()->with('photo')->where(['parentSection_id' => NULL])->all();
        return $this->render('catalog', compact('section', 'sections'));
    }

    public function actionProduct(){
       \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        $id = \Yii::$app->request->get('id');
        $good = Product::find()->with('photo')->where(['id' => $id])->one();
        return $this->render('product', compact('section', 'good', 'id'));
    }
}

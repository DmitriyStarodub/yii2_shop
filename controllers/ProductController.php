<?php

namespace app\controllers;

use app\models\Section;
use app\models\Product;
use app\models\ProductPhoto;
use app\models\Characteristics;
use app\models\CharacteristicsItems;
use app\models\ProductCharacteristics;
use app\models\Articles;
use app\models\Photo;
use app\models\TestModel;

class ProductController extends AppController {

    public function actionGoods() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        $id = \Yii::$app->request->get('id');
        $goods = NULL;
        $query = NULL;
        if (Section::find()->with('photo')->where(['parentSection_id' => $id])->one() == NULL) {
            $subsections = Section::find()->with('photo')->where(['Id' => $id])->one();
            $query = Product::find()->with('photo')->where(['section_id' => $id])->select('id, name, description');
            $pages = new \yii\data\Pagination(
                    ['totalCount' => $query->count(),
                'pageSize' => 20,
                'pageSizeParam' => false,
                'forcePageParam' => false]
            );
            $goods = $query->offset($pages->offset)->limit($pages->limit)->all();
        }
        $sections = Section::find()->with('photo')->where(['parentSection_id' => NULL])->select('id, name')->all();

        $characteristics = Characteristics::find()->where(['section_id' => $id])->all();
        $characteristicsItems = CharacteristicsItems::find()->join('INNER JOIN', 'Characteristics',
                'CharacteristicsItems.characteristics_id = Characteristics.id')->where(['Characteristics.section_id' => $id])->asArray()->all();
        
         $model = new TestModel();
         $model->items = CharacteristicsItems::find()->join('INNER JOIN', 'Characteristics',
                'CharacteristicsItems.characteristics_id = Characteristics.id')->where(['Characteristics.section_id' => $id])->asArray()->all();
        
        
        
        return $this->render('goods', compact('sections', 'subsections', 'model', 'pages', 'goods', 'characteristics', 'characteristicsItems', 'test'));
    }

    public function actionItem() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        $id = \Yii::$app->request->get('id');
        $good = Product::find()->with('photo')->where(['id' => $id])->one();
        $subsections_id = Section::find()->where(['id' => $good->section_id])->select('parentSection_id')->one();
        $subsection_id = $subsections_id->parentSection_id;
        return $this->render('item', compact('good', 'subsection_id'));
    }

}

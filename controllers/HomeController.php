<?php

namespace app\controllers;

use app\models\Section;
use app\models\SectionPhoto;
use app\models\CharacteristicsItems;
use app\models\Articles;
use app\models\Characteristics;
use yii\helpers\ArrayHelper;

class HomeController extends AppController {

    public function actionIndex() {
        /*
          $test = array();
          if (($handle = fopen("C:\\Users\\Starodub\\Desktop\\SectionPhoto.txt", "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) {
          array_push($test, $data);
          }
          fclose($handle);
          }



          for ($j = 0 ; $j < count($test); $j++) {
          // создаем экземпляр класса
          $model = new SectionPhoto();
          $model->id = $test[$j][0];
          $model->section_id = $test[$j][1];
          $model->photo_id = $test[$j][2];
          // сохраняем запись, за место метода save() можно использовать метод insert() ($model->insert())
          $model->insert();//$model->save();
          }
         */
        $sections = Section::find()->with('photo')->where(['parentSection_id' => NULL])->all();
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        $articles = Articles::find()->with('photo')->all();
        return $this->render('index', compact('post', 'articles', 'sections'));
    }

    public function actionQuestions() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        return $this->render('questions', compact('home'));
    }

    public function actionSale() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        return $this->render('sale', compact('home'));
    }

    public function actionBank() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        return $this->render('bank', compact('home'));
    }

    public function actionTest() {
        return test;
    }

}

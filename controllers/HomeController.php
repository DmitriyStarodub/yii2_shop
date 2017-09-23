<?php

namespace app\controllers;

use app\models\Section;
use app\models\Articles;
use app\models\EntryFormQuestion;
use Yii;

class HomeController extends AppController {

    public function actionIndex() {
        $sections = Section::find()->with('photo')->where(['parentSection_id' => NULL])->all();
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        $articles = Articles::find()->with('photo')->all();
        return $this->render('index', compact('post', 'articles', 'sections'));
    }
    public function actionQuestions() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();

        $newQuestion = new EntryFormQuestion();
        if ($newQuestion->load(Yii::$app->request->post()) && $newQuestion->validate()) {
            // данные в $newReview удачно проверены

            return $this->redirect(array('additionconfirm', 'user' => $newQuestion->name));
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
             return $this->render('questions', compact('home', 'newQuestion'));
        }
    }
    public function actionSale() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        return $this->render('sale', compact('home'));
    }

    public function actionBank() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        return $this->render('bank', compact('home'));
    }

    public function actionDelivery() {
        \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        return $this->render('delivery', compact('home'));
    }
}

<?php

namespace app\controllers;

use app\models\Articles;
/**
 * Description of PostController
 *
 * @author Starodub
 */
class ArticlesController extends AppController {

      public function actionIndex() {
       \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        $query = Articles::find()->select('id, name, text')->orderBy('id');
        $pages = new \yii\data\Pagination(
                ['totalCount' => $query->count(),
            'pageSize' => 6,
            'pageSizeParam' => false,
            'forcePageParam' => false]
        );
        $articles = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index', compact('articles', 'pages'));
    }

    public function actionArticle() {
       \Yii::$app->view->params = $this->GetItemsDrobDounMain();
        $id = \Yii::$app->request->get('id');
        if(!$id) {$id = 0;}
        $articles = Articles::find()->with('photo')->all();
        return $this->render('article', compact('articles', 'id'));
    }

}
<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="web\css\font-awesome.css" rel="stylesheet">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <header class="myheader">
            <div class="container">
                <div>
                    <ul class="hr">
                        <li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></li>
                        <li class="phone-number">+38(048)111 11 11</li>
                        <li class="phone-number">+38(048)222 22 22</li>
                        <li><a href="/home/questions">Вопросы и ответы</a></li>
                        <li><a href="/home/bank">Кредит</a></li>
                        <li><a href="/home/delivery">Доставка и оплата</a></li>
                        <li><a href="/articles/">Новости</a></li>
                        <li><a href="/site/contact">Контакты</a></li>
                    </ul>
                </div>
                <div>    
                    <?php
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-right navbar-logo-size'],
                        'items' => [
                            Yii::$app->user->isGuest ? (
                                    ['label' => 'Login', 'url' => ['/site/login']]
                                    ) : (
                                    '<li>'
                                    . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                                    . Html::submitButton(
                                            'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link']
                                    )
                                    . Html::endForm()
                                    . '</li>'
                                    )
                        ],
                    ]);
                    ?>
                </div>
            </div>
            <nav class="navbar navbar-default my-navbar-size">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>   
                        <a class="navbar-brand" href="/home/index">
                            <?echo Html::img('/images/brend03.jpg', $options = ['alt' => 'Funky Looking Image', 
                            'height' => '30',
                            'width' => '30',] )?>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li ><a href="/home/sale" class="color-text">Акции
                                    <span class="sr-only">(current)</span>
                                    <span class="glyphicon glyphicon-tags" aria-hidden="true"></span></a></li>
                            <li><a href="/home/sale" class="color-text">Новинки</a></li>
                        </ul>
                        <form class="navbar-form navbar-left">
                            <div class="form-group search-size">
                                <input type="text" class="form-control search-size" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Поиск</button>
                            <?php
                            $options = ['value' => 'none', 'class' => 'btn dropdown-toggle dropdown-my', id => 'dropdownMenu1'];
                            echo Html::dropDownList('cat', 'null', $this->params, $options);
                            ?>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="glyphicon glyphicon-shopping-cart shopping-cart" aria-hidden="true"></a></li>
                            <li><a href="#" class="phone-number color-text">Отследить заказ</a></li>
                            <li><a href="#"><span class="fa fa-info shopping-cart icon-info" aria-hidden="true"></span></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </header>
        <div class="container">
            <?=
            Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div>
                <a href="#"> 
                    <button type="button" class="btn-up">
                        <span class="glyphicon glyphicon-eject" aria-hidden="true"></span>
                    </button>
                </a>
            </div>
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

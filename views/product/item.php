<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\Url;
$this->registerCssFile('web/css/site.css');
?>
<?php $this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>

<script>
    var wi = screen.width; // ширина  
    var he = document.body.clientHeight; // высота 

    function ChangeImage(source)
    {
        document.getElementById('myPic').src = source;
    }
</script>
<div class="margin-breadcrumb">
    <ol class="breadcrumb">
        <li><a href="/home/index">Home</a></li>
        <li><a href="/section/catalog">Catalog</a></li>
        <li><a href="<?= yii\helpers\Url::to(['/section/index', 'id' => $subsection_id]) ?>">Section</a></li>
        <li><a href="<?= yii\helpers\Url::to(['/product/goods', 'id' => $good->section_id]) ?>">Goods</a></li>
        <li class="active">Product</li>
    </ol>
</div>
<div class="tabs">
    <?php
    echo Tabs::widget(['options' => ['class' => 'border-none']]);         // костыль с виджетом 
    ?>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-1" data-toggle="tab">Описание</a></li>
        <li><a href="#tab-2" data-toggle="tab">Характеристики</a></li>
        <li><a href="#tab-3" data-toggle="tab">Отзывы</a></li>
    </ul>

    <div class="row">
        <div class="col-sm-12 col-md-7">
            <div class="thumbnail border">
                <?
                $imgId = 0;
                echo Html::img(($good->photo[$imgId]->address).($good->photo[$imgId]->name), $options = ['alt' => 'Funky Looking Image', 
                'height' => '500',
                'width' => '700',
                'class' => 'max-img-product',
                'id' => 'myPic'] )?>
            </div>
            <div class="thumbnail border-none">
                <div align="center">
                    <?php if (!empty($good->photo)): ?>
                        <?php foreach ($good->photo as $key => $photo): ?>
                            <button class="btn-icon">
                                <img  src="<?= ($photo->address) . ($photo->name) ?>" alt='Funky Looking Image' height="100%" width="100%"
                                      class='max-img-product' onclick='ChangeImage("<?= ($photo->address) . ($photo->name) ?>")'>
                            </button>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-5">
            <div class="thumbnail border-none">
                <h1 align="center"><?= $good->name; ?></h1>
            </div>
            <div class="thumbnail border-none">
                <h1 align="center"><?= $good->priceOut; ?></h1>
            </div>
            <div class="thumbnail border-none">
                <div align="center">
                    <button class="btn-pay">Купить</button>
                    <button class="btn-shopping-cart">Добавить в карзину</button>
                </div>
            </div>
            <div class="thumbnail border-none">
                <h1 align="center"><a href="/home/bank">Кредит</a></h1>
            </div>
            <div class="thumbnail border-none">
                <h1 align="center"><a href="/home/delivery">Доставка</a></h1>
            </div>
            <div class="thumbnail border-none">
                <p align="center"><?= $good->description; ?></p>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" id="tab-1">
            <div>
                <h1>Описание</h1>
                <p><?= $good->text; ?>
                </p>
            </div>
        </div>
        <div class="tab-pane" id="tab-2">
            <div>
                <h1>Характеристики</h1>
                <?php foreach ($good->characteristic as $characteristic): ?>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <p><?= $characteristic->name; ?></p>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <p><?= $characteristic->value; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="tab-pane" id="tab-3">
            <div class=" row">
                <div  class="col-xs-8 col-sm-4 col-md-3">
                    <div  class="float-left text-size-xx-large">Отзывы</div>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-1 ">
                    <button data-toggle="collapse" type="button" data-target="#review" class="text-size-x-large btn-characteristiks" id="btnReview" >
                        <span class="glyphicon glyphicon-pencil text-size-x-large" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-10">
                    <div id="review" class="collapse">  
                        <div class="panel panel-info">
                            <!-- Default panel contents -->
                            <div class="panel-heading">
                                Оставить отзыв
                            </div>
                            <div class="panel-body color-panel-body">
                                <div class="row">
                                    <div class="col-sm-4 col-md-3">
                                        <span class="font-bold">Ваша оценка</span>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-md-offset-0 col-sm-offset-1">
                                        <a onclick="OnClickStar(id)" id="1"><span id="6" class="glyphicon glyphicon-star-empty text-size-x-large" aria-hidden="true"></span></a>
                                        <a onclick="OnClickStar(id)" id="2"><span id="7" class="glyphicon glyphicon-star-empty text-size-x-large" aria-hidden="true"></span></a>
                                        <a onclick="OnClickStar(id)" id="3"><span id="8" class="glyphicon glyphicon-star-empty text-size-x-large" aria-hidden="true"></span></a>
                                        <a onclick="OnClickStar(id)" id="4"><span id="9" class="glyphicon glyphicon-star-empty text-size-x-large" aria-hidden="true"></span></a>
                                        <a onclick="OnClickStar(id)" id="5"><span id="10" class="glyphicon glyphicon-star-empty text-size-x-large" aria-hidden="true"></span></a>
                                      </div>
                                </div>
                                <?php
                                $form = ActiveForm::begin([
                                            'fieldConfig' => [
                                                'template' => '<div class="row"><div class="col-sm-4 col-md-3">{label}</div><div class="col-sm-4 col-md-4 col-md-offset-0 col-sm-offset-1">{input}</div>{hint}{error}</div></br>',
                                                'labelOptions' => ['class' => 'control-label ']
                                            ],
                                ]);
                                ?>
                                <?= $form->field($newReview, 'name') ?>
                                <?= $form->field($newReview, 'email') ?>
                                <?= $form->field($newReview, 'limitations')->textArea(['rows' => 3]) ?>
                                <?= $form->field($newReview, 'dignity')->textArea(['rows' => 3]) ?>
                                <?= $form->field($newReview, 'comment')->textArea(['rows' => 7]) ?>

                                <div class="row">
                                    <div class="form-group">
                                        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary col-xs-4 col-sm-2 col-md-2 col-xs-offset-2 col-md-offset-2 col-sm-offset-4']) ?>
                                        <?= Html::button('Отмена', [ 'type' => 'reset', 'class' => 'btn btn-primary col-xs-4 col-sm-2 col-md-2 col-md-offset-2 col-sm-offset-2  col-xs-offset-1']) ?>
                                    </div>
                                </div>
                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <?php if (!empty($reviews)): ?>
                        <?php foreach ($reviews as $review): ?>
                            <p><?= $review->buyersAuth_id ?></p>       <!-- временно вместо Имени покупателя его ID   -->
                            <hr />
                            <p><?= $review->text ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <?php if (empty($reviews)): ?>
                        <p>Отзывов по данному товару пока нет.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
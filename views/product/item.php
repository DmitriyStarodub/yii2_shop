<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Tabs;
use yii\helpers\Url;

$this->registerCssFile('web/css/site.css');
?>

<script>
    var wi = screen.width; // ширина  
    var he = document.body.clientHeight; // высота 
    
    function ChangeImage(source) 
{ 
document.getElementById ('myPic').src = source; 
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
                                <img  src="<?=($photo->address).($photo->name)?>" alt='Funky Looking Image' height="100%" width="100%"
                                      class='max-img-product' onclick='ChangeImage("<?= ($photo->address).($photo->name)?>")'>
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
                <h1 align="center">Доставка</h1>
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
                <p><?= $good->text; ?>
                </p>
            </div>
        </div>
        <div class="tab-pane" id="tab-3">
             <div>
                <h1>Отзывы</h1>
                <p><?= $good->text; ?>
                </p>
            </div>
        </div>
    </div>
</div>

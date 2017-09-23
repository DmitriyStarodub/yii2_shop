<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
//use yii\helpers\Url;

$this->registerCssFile('web/css/shop.css');
?>

<script>
    var wi = screen.width; // ширина  
    var he = document.body.clientHeight; // высота   
</script>
<div class="margin-breadcrumb">
    <ol class="breadcrumb">
        <li><a href="/home/index">Home</a></li>
        <li class="active">Sale</li>
    </ol>
</div>
<div class="container">
    <div class="reklama1  " width = wi>
        <?echo Html::img('/images/sale01.png', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
    </div>
    <div class="reklama1 " width = wi>
        <?echo Html::img('/images/sale02.jpg', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
    </div>
    <div class="row row-sale">
        <div class="col-sm-4 col-md-4 sale01">
            <div class="thumbnail">
                <?echo Html::img('/images/sale08.png', $options = ['alt' => 'Funky Looking Image', 
                'height' => '140',
                'width' => '140',
                'class' => 'max-img',] )?>
                <div class="caption">
                    <a href="/site/about"><h3 align="center">Акция</h3></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 sale01">
            <div class="thumbnail">
                <?echo Html::img('/images/sale10.jpg', $options = ['alt' => 'Funky Looking Image', 
                'height' => '140',
                'width' => '140',
                'class' => 'max-img',] )?>
                <div class="caption">
                    <a href="/site/about"><h3 align="center">Акция</h3></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 sale01">
            <div class="thumbnail">
                <?echo Html::img('/images/sale09.jpg', $options = ['alt' => 'Funky Looking Image', 
                'height' => '140',
                'width' => '140',
                'class' => 'max-img',] )?>
                <div class="caption">
                    <a href="/site/about"><h3 align="center">Акция</h3></a>
                </div>
            </div>
        </div>
    </div>
    <div class="reklama1 margin-top" width = wi>
        <?echo Html::img('/images/sale06.jpg', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
    </div>
    <div class="row row-sale">
        <div class="col-sm-4 col-md-4 sale01">
            <div class="thumbnail">
                <?echo Html::img('/images/sale03.jpg', $options = ['alt' => 'Funky Looking Image', 
                'height' => '140',
                'width' => '140',
                'class' => 'max-img',] )?>
                <div class="caption">
                    <a href="/site/about"><h3 align="center">Акция</h3></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 sale01">
            <div class="thumbnail">
                <?echo Html::img('/images/sale04.jpg', $options = ['alt' => 'Funky Looking Image', 
                'height' => '140',
                'width' => '140',
                'class' => 'max-img',] )?>
                <div class="caption">
                    <a href="/site/about"><h3 align="center">Акция</h3></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 sale01">
            <div class="thumbnail">
                <?echo Html::img('/images/sale05.jpg', $options = ['alt' => 'Funky Looking Image', 
                'height' => '140',
                'width' => '140',
                'class' => 'max-img',] )?>
                <div class="caption">
                    <a href="/site/about"><h3 align="center">Акция</h3></a>
                </div>
            </div>
        </div>
    </div>
    <div class="reklama1 margin-top" width = wi>
        <?echo Html::img('/images/image03.jpg', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
    </div>
    <div class="reklama1 margin-top" width = wi>
        <?echo Html::img('/images/sale02.jpg', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
    </div>
</div>







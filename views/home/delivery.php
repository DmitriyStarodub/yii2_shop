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
        <li class="active">Delivery and Payment</li>
    </ol>
</div>
  <div class="container">
    <div class="media-object padding-right" width = wi>
        <?echo Html::img('/images/delivery1.png', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
    </div>
    <h1 class='text-size6'>Способ доставки</h1>
      <div class='row'>
          <div class="col-sm-3 col-md-3">
              <?echo Html::img('/images/delivery2.jpg', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
          </div>
          <div class="col-sm-3 col-md-3">
              <?echo Html::img('/images/delivery5.jpg', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
          </div>
          <div class="col-sm-3 col-md-3">
              <?echo Html::img('/images/delivery3.png', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
          </div>
          <div class="col-sm-3 col-md-3">
              <?echo Html::img('/images/delivery4.jpg', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
          </div>
      </div>
    <h1 class='text-size6'>Способ оплаты</h1>
    <div class="col-sm-4 col-md-3 col-md-offset-2 col-sm-offset-2">
              <?echo Html::img('/images/payment1.png', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
          </div>
          <div class="col-sm-4 col-md-3 col-md-offset-2">
              <?echo Html::img('/images/payment2.png', $options = ['alt' => 'Funky Looking Image', 
        'height' => '100%',
        'width' => '100%',] )?>
          </div>
</div>
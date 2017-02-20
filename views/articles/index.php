<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->registerCssFile('web/css/site.css');
?>

<script>  
    var wi=screen.width; // ширина  
    var he=document.body.clientHeight; // высота   
</script>
<div class="margin-breadcrumb">
    <ol class="breadcrumb">
        <li><a href="/home/index">Home</a></li>
        <li class="active">News</li>
    </ol>
</div>
<div><h1 align="center">Новости</h1></div>
<div class="row">
    <?php if (!empty($articles)): ?>
    <?php foreach ($articles as $article): ?>
    <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <?echo Html::img(($article->photo[0]->address).($article->photo[0]->name), $options = ['alt' => 'Funky Looking Image', 
                'height' => '100%',
                'width' => '100%',] )?>
      <div class="caption">
          <a href="<?= yii\helpers\Url::to(['/articles/article', 'id' => $article->id])?>">
              <h3 align="center"><?=$article->name ?></h3>
        <p><?= mb_strimwidth($article->text,0,120) ?></p></a>
        <p><a href="/articles/index" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
    <?php endforeach;?>
    <?php endif;?>
</div>
<div><?= \yii\widgets\LinkPager::widget(['pagination' => $pages])?></div>
<div class="reklama1" width = wi>
    <?echo Html::img('/images/image02.jpg', $options = ['alt' => 'Funky Looking Image', 
                'height' => '100%',
                'width' => '100%',] )?>
</div>
<div class="reviewed">
    <div class="row">
  <div class="col-xs-4 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/tovar.jpg" alt="...">
    </a>
  </div>
 <div class="col-xs-4 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/tovar.jpg" alt="...">
    </a>
  </div>
 <div class="col-xs-4 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/tovar.jpg" alt="...">
    </a>
  </div>
 <div class="col-xs-4 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/tovar.jpg" alt="...">
    </a>
  </div>
 <div class="col-xs-4 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/tovar.jpg" alt="...">
    </a>
  </div>
 <div class="col-xs-4 col-md-2">
    <a href="#" class="thumbnail">
      <img src="/images/tovar.jpg" alt="...">
    </a>
  </div>
</div>
</div>
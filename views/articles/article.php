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
        <li><a href="/articles/index">News</a></li>
        <li class="active">Article</li>
    </ol>
</div>
<h1><?=$articles[$id]->name ?></h1>
<div class="article">
    <?echo Html::img(($articles[$id]->photo[0]->address).($articles[$id]->photo[0]->name), $options = ['alt' => 'Funky Looking Image',
                'height' => '100%',
                'width' => '100%',] )?>
</div>
<p><?= mb_strimwidth($articles[$id]->text,0,strlen($articles[$id]->text)/4) ?></p>
<div class="article">
    <?echo Html::img(($articles[$id]->photo[0]->address).($articles[$id]->photo[0]->name), $options = ['alt' => 'Funky Looking Image',
                'height' => '100%',
                'width' => '100%',] )?>
</div>

<p><?= mb_strimwidth($articles[$id]->text,strlen($articles[$id]->text)/4 + 1,strlen($articles[$id]->text)) ?></p>
<div class="row">
  <?php if (!empty($articles)): ?>
    <?php $j = 0;for ($i = 0; $j < 3; $i++): 
        if ($i == $id):continue; endif;
        $j++?>
    <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <?echo Html::img(($articles[$i]->photo[0]->address).($articles[$i]->photo[0]->name), $options = ['alt' => 'Funky Looking Image', 
                'height' => '100%',
                'width' => '100%',] )?>
      <div class="caption">
          <a href="<?= yii\helpers\Url::to(['/articles/article', 'id' => $articles[$i]->id])?>">
              <h3 align="center"><?=$articles[$i]->name ?></h3>
        <p><?= mb_strimwidth($articles[$i]->text,0,120) ?></p></a>
        <p><a href="/articles/index" class="btn btn-primary" role="button">Button</a> 
            <a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
  </div>
    <?php endfor;?>
    <?php endif;?>
</div>
<div>
    <button type="button" class="btn-up">
        <span class="glyphicon glyphicon-eject" aria-hidden="true"></span>
    </button>
</div>
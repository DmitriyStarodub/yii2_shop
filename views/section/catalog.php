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
        <li class="active">Catalog</li>
    </ol>
</div>
<div class="reklama1" width = wi>
    <?echo Html::img('/images/image03.jpg', $options = ['alt' => 'Funky Looking Image', 
                'height' => '100%',
                'width' => '100%',] )?>
</div>
<div class="row">
   <?php if (!empty($sections)): ?>
            <?php foreach ($sections as $section): ?>
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail">
                        <?echo Html::img(($section->photo[0]->address).($section->photo[0]->name), $options = ['alt' => 'Funky Looking Image', 
                        'height' => '140',
                        'width' => '140',
                        'class' => 'max-img',] )?>
                        <div class="caption">
                            <a href="<?= yii\helpers\Url::to(['/section/index', 'id' => $section->id]) ?>">
                                <h3 align="center"><?= $section->name ?></h3>
                                <p><?= mb_strimwidth($section->description, 0, 120) ?></p></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
</div>
<div class="reklama1" width = wi>
    <?echo Html::img('/images/image02.jpg', $options = ['alt' => 'Funky Looking Image', 
                'height' => '100%',
                'width' => '100%',] )?>
</div>
<div class="reviewed">
    <div class="row">
        <?php for($i = 0; $i < 6; $i++):?>
                <div class="col-xs-4 col-md-2">
                    <a href="#" class="thumbnail">
                    <img src="/images/tovar.jpg" alt="...">
                    </a>
                </div>
        <?php endfor;?>
</div>
</div>
<?php
use yii\helpers\Html;

$this->registerCssFile('web/css/site.css');
?>

<script>
    var wi = screen.width; // ширина  
    var he = document.body.clientHeight; // высота   
</script>
<div class="margin-breadcrumb">
    <ol class="breadcrumb">
  <li><a href="/post/index">Home</a></li>
  <li><a href="/section/catalog">Catalog</a></li>
  <li class="active">Section</li>
</ol>
</div>
<div class="row">
    <div class="col-sm-4 col-md-3">
        <div class="thumbnail">
            <a  href="/section/catalog"><h2 align="center">Каталог</h2></a>
            <hr>
            <?php if (!empty($sections)): ?>
                <?php for ($i = 0; $i < count($sections); $i++): 
                    if (!$sections[$i]->parentSection_id == NULL) {continue;} ?>
                    <div class="caption">
                        <a href="<?= yii\helpers\Url::to(['/section/index', 'id' => $sections[$i]->id]) ?>">
                            <h4 align="center"><?= $sections[$i]->name ?></h4></a>
                    </div>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-sm-8 col-md-9">
        <div class="col-sm-12 col-md-12">
            <div class="thumbnail  reklama2">
                <?echo Html::img('/images/image03.jpg', $options = ['alt' => 'Funky Looking Image',
                'height' => '100%',
                'width' => '100%',
                'class' => 'max-size-reklama',] )?>
            </div>
        </div>
        <div><h1><?=$sections[$id - 1]->name ?></h1></div>          <!--костыль id не совпадает с разделом -->
        <?php if (!empty($subsections)): ?>
            <?php foreach ($subsections as $subsection): ?>
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                        <?echo Html::img(($subsection->photo[0]->address).($subsection->photo[0]->name), $options = ['alt' => 'Funky Looking Image', 
                        'height' => '100%',
                        'width' => '100%',
                        'class' => 'max-img',] )?>
                        <div class="caption">
                            <a href="<?= yii\helpers\Url::to(['/product/goods', 'id' => $subsection->id]) ?>">
                                <h3 align="center"><?= $subsection->name ?></h3>
                                <p><?= mb_strimwidth($subsection->description, 0, 120) ?></p></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
     <div class="row">
        <div class="col-xs-6 col-md-4 col-md-offset-5 col-sm-offset-5 col-xs-offset-4">
        <?= \yii\widgets\LinkPager::widget(['pagination' => $pages])?>
        </div>
    </div>
    </div>
</div>
<div class="reklama1" width = wi>
    <?echo Html::img('/images/image02.jpg', $options = ['alt' => 'Funky Looking Image', 
    'height' => '100%',
    'width' => '100%',] )?>
</div>
<div class="row">
     <?php if (!empty($sections)): ?>
    <?php $j = 0;for ($i = 0; $j < 3; $i++): 
        if ($i == $id):continue; endif;
        $j++?>
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                        <?echo Html::img(($sections[$i]->photo[0]->address).($sections[$i]->photo[0]->name), $options = ['alt' => 'Funky Looking Image', 
                        'height' => '100%',
                        'width' => '100%',
                        'class' => 'max-img',] )?>
                        <div class="caption">
                            <a href="<?= yii\helpers\Url::to(['/section/index', 'id' => $sections[$i]->id]) ?>">
                                <h3 align="center"><?= $sections[$i]->name ?></h3>
                                <p align="center"><?= mb_strimwidth($sections[$i]->description, 0, 120) ?></p></a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        <?php endif; ?>
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
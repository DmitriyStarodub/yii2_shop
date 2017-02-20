<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->registerCssFile('web/css/site.css');
?>

<script>
    var wi = screen.width; // ширина  
    var he = document.body.clientHeight; // высота   
</script>
<div class="margin-breadcrumb">
    <ol class="breadcrumb">
        <li><a href="/home/index">Home</a></li>
        <li><a href="/section/catalog">Catalog</a></li>
        <li><a href="<?= yii\helpers\Url::to(['/section/index', 'id' => $subsections->parentSection_id]) ?>">Section</a></li>
        <li class="active">Goods</li>
    </ol>
</div>
<div class="row">
    <div class="col-sm-4 col-md-3">
        <div class="thumbnail" align="center">
            <select  class="dropdownMy text-size6 text-center-my" onchange="document.location = this.options[this.selectedIndex].value">   <!--   onchange="document.location=this.options[this.selectedIndex].value"   -->
                <option value="/section/catalog" class="text-size3">Каталог</option>
                <?php if (!empty($sections)): ?>
                    <?php foreach ($sections as $section): ?>
                        <option align="center" class="text-size3" value="<?= yii\helpers\Url::to(['/section/index', 'id' => $section->id]) ?>"><?= $section->name ?></option>
                    <?php endforeach; ?>
                <?php endif; ?>
            </select>  
        </div>
        <?php if (!empty($characteristics)): ?>
            <?php foreach ($characteristics as $characteristic): ?>
                <div class="panel panel-default ">
                    <div class="panel-heading" align="center"><?= $characteristic->name ?></div>
                    <div class="panel-body">
                <?= Html::beginForm(['section/index', 'id' => $id], 'post', ['class' => '']) ?>
                        <?php if (!empty($characteristicsItems)): ?>
                         <?= Html::checkbox('items', false, ['label' => 'Все']) ?><br/>
                            <?php for ($i = 0; $i < count($characteristicsItems); $i++): ?> 
                                <?php if ($characteristicsItems[$i]['characteristics_id'] == $characteristic->id): ?>
                                    <?= Html::checkbox('items', false, ['label' => $characteristicsItems[$i]['value']]) ?><br/>                            
                                <?php endif; ?>
                            <?php endfor; ?>
                        <?php endif; ?>
                        <?= Html::endForm() ?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="thumbnail">
            <?echo Html::img('/images/sale04.jpg', $options = ['alt' => 'Funky Looking Image', 
            'height' => '140',
            'width' => '140',
            'class' => 'max-img',] )?>
            <div class="caption">
                <a href="/product/goods"><h4 align="center">Название</h4>
                    <p align="center">text text text text text text text text 
                        text text text text text text text</p></a>
            </div>
        </div>
        <div class="thumbnail">
            <?echo Html::img('/images/sale08.png', $options = ['alt' => 'Funky Looking Image', 
            'height' => '140',
            'width' => '140',
            'class' => 'max-img',] )?>
            <div class="caption">
                <a href="/product/goods"><h4 align="center">Название</h4>
                    <p align="center">text text text text text text text text 
                        text text text text text text text</p></a>
            </div>
        </div>
        <div class="thumbnail">
            <?echo Html::img('/images/sale03.jpg', $options = ['alt' => 'Funky Looking Image', 
            'height' => '140',
            'width' => '140',
            'class' => 'max-img',] )?>
            <div class="caption">
                <a href="/product/goods"><h4 align="center">Название</h4>
                    <p align="center">text text text text text text text text 
                        text text text text text text text</p></a>
            </div>
        </div>
    </div>
    <div class="col-sm-8 col-md-9">
        <div class="col-sm-12 col-md-12">
            <div class=" marginBottom">
                <div><h1><?= $subsections->name ?></h1></div>          <!--костыль id не совпадает с разделом -->
                <button>фильтр</button>
                <button>фильтр</button>
                <button>фильтр</button>
            </div>
        </div>


        <?php if (!empty($goods)): ?>
            <?php foreach ($goods as $good): ?>
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail">
                        <?echo Html::img(($good->photo[0]->address).($good->photo[0]->name), $options = ['alt' => 'Funky Looking Image', 
                        'height' => '140',
                        'width' => '140',
                        'class' => 'max-img',] )?>
                        <div class="caption">
                            <a href="<?= yii\helpers\Url::to(['/product/item', 'id' => $good->id]) ?>">
                                <h4 align="center"><?= $good->name ?></h4>
                                <p><?= mb_strimwidth($good->description, 0, 120) ?></p></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div><?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?></div>
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
<?php

use yii\helpers\Html;

$this->registerCssFile('web/css/site.css');
?>
<script>
    var wi = screen.width; // ширина  
    var he = document.body.clientHeight; // высота   
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--  подключение файла java script и зависимость скрипта от yii\web\YiiAsset -->
<?php $this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>

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
        <?php if (!empty($filter[0]->myFilter)): ?>
            <?php foreach ($filter[0]->myFilter as $characteristic): ?>
                <div id="panelCharact" class="panel panel-default mypanel">
                    <div class="panel-heading mypanelheading">
                        <div class="row margin-top-5">
                            <div class="col-xs-10 col-md-10">
                                <?= $characteristic->name ?>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <button data-toggle="collapse" type="button" data-target="#<?= $characteristic->id ?>" class="btn-characteristiks" id="btn<?= $characteristic->id ?>" >
                                    <span id="span<?= $characteristic->id ?>1" class="glyphicon glyphicon-chevron-down padingLeft" aria-hidden="true"></span>
                                    <span id="span<?= $characteristic->id ?>2" class="glyphicon glyphicon-chevron-up padingLeft hidden" ></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="<?= $characteristic->id ?>" class="collapse in">
                        <div class="panel-body borderone">
                            <?= Html::beginForm(['section/index', 'id' => $id], 'post', ['class' => '']) ?>
                            <?php if (!empty($filterItem)): ?>
                                <?php foreach ($filterItem[$characteristic->id - 1]->myFilterItem as $key => $item): ?>
                                    <p><input type="checkbox"><?= $item->value ?></p>
                                <?php endforeach; ?>
                            <?php endif; ?>
                             <?= Html::endForm() ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php for ($i = 0; $i < 3; $i++): ?>
    <?php $imagesName = array('/images/sale04.jpg', '/images/sale08.png', '/images/sale03.jpg') ?>
            <div class="thumbnail">
                <?echo Html::img($imagesName[$i], $options = ['alt' => 'Funky Looking Image', 
                'height' => '140',
                'width' => '140',
                'class' => 'max-img',] )?>
                <div class="caption">
                    <a href="/product/goods"><h4 align="center">Название</h4>
                        <p align="center">text text text text text text text text 
                            text text text text text text text</p></a>
                </div>
            </div>
<?php endfor; ?>
    </div>
    <div class="col-sm-8 col-md-9">
        <div class="col-sm-12 col-md-12">
            <div class=" marginBottom">
                <div><h1><?= $subsections->name ?></h1></div>
                <button disabled>Сортировка</button>
                <button disabled>Сортировка</button>
                <button disabled>Сортировка</button>
            </div>
        </div>
        <?php if (!empty($goods)): ?>
    <?php foreach ($goods as $good): ?>
                <div class="col-sm-4 col-md-3" id = "<?= $good->id?>">
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
    <div class="row">
        <div class="col-xs-6 col-md-4 col-md-offset-6 col-sm-offset-5 col-xs-offset-3">
<?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
        </div>
    </div>
</div>
<div class="reviewed">
    <div class="row">
<?php for ($i = 0; $i < 6; $i++): ?>
            <div class="col-xs-4 col-md-2">
                <a href="#" class="thumbnail">
                    <img src="/images/tovar.jpg" alt="...">
                </a>
            </div>
<?php endfor; ?>
    </div>
</div>


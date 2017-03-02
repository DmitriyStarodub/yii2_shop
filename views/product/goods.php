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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--  подключение файла java script и зависимость скрипта от yii\web\YiiAsset -->
<?php// $this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>


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
                    <div class="panel-heading">
                        <div class="row margin-top-5">
                            <div class="col-xs-10 col-md-10">
                                <?= $characteristic->name ?>
                            </div>
                            <div class="col-xs-2 col-md-2">
                                <button data-toggle="collapse" type="button" data-target="#<?= $characteristic->id ?>" class="btn-characteristiks" id="btn<?= $characteristic->id ?>" >
                                    <span id="span<?= $characteristic->id ?>1" class="glyphicon glyphicon-chevron-down padingLeft" aria-hidden="true"></span>
                                    <span id="span<?= $characteristic->id ?>2" class="glyphicon glyphicon-chevron-up padingLeft hidden" ></span>
                                </button>
                                <script>
                                    // Using multiple unit types within one animation.
                                    $("#btn<?= $characteristic->id ?>").click(function () {
                                        
                                                if (document.getElementById("span<?= $characteristic->id ?>1").className === "glyphicon glyphicon-chevron-down padingLeft hidden")
                                        {
                                                document.getElementById("span<?= $characteristic->id ?>1").className = "glyphicon glyphicon-chevron-down padingLeft";
                                                document.getElementById("span<?= $characteristic->id ?>2").className = "glyphicon glyphicon-chevron-up padingLeft hidden";
                                        }
                                        else
                                        {

                                            document.getElementById("span<?= $characteristic->id ?>1").className = "glyphicon glyphicon-chevron-down padingLeft hidden";
                                            document.getElementById("span<?= $characteristic->id ?>2").className = "glyphicon glyphicon-chevron-up padingLeft";

                                        }
                                    });


                                </script>
                            </div>
                        </div>
                    </div>
                    <div id="<?= $characteristic->id ?>" class="collapse">
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
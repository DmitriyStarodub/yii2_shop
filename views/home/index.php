<?php
use yii\helpers\Html;
$this->registerCssFile('web/css/site.css');
?>

<script>
    var wi = screen.width; // ширина  
    var he = document.body.clientHeight; // высота   
</script>
<div class="reklama1" width = wi>
    <?echo Html::img('/images/image03.jpg', $options = ['alt' => 'Funky Looking Image', 
    'height' => '100%',
    'width' => '100%',] )?>
</div>
<div class="row">
    <div class="col-sm-4 col-md-3">
        <div class="thumbnail">
            <a href="/section/catalog"><h2 align="center">Каталог</h2></a>
            <hr>
            <?php if (!empty($sections)): ?>
                <?php foreach ($sections as $section): ?>
                    <div class="caption">
                        <a href="<?= yii\helpers\Url::to(['/section/index', 'id' => $section->id]) ?>">
                            <h4 align="center"><?= $section->name ?></h4></a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="col-sm-8 col-md-9">
        <?php if (!empty($sections)): ?>
            <?php for ($i = 0; $i < 9; $i++): ?>
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                        <?echo Html::img(($sections[$i]->photo[0]->address).($sections[$i]->photo[0]->name), $options = ['alt' => 'Funky Looking Image', 
                        'height' => '100%',
                        'width' => '100%',
                        'class' => 'max-img',] )?>
                        <div class="caption">
                            <a href="<?= yii\helpers\Url::to(['/section/index', 'id' => $sections[$i]->id]) ?>">
                                <h3 align="center"><?= $sections[$i]->name ?></h3>
                                <p><?= mb_strimwidth($sections[$i]->description, 0, 120) ?></p></a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        <?php endif; ?>
    </div>
</div>
<div class="reklama1" width = wi>
    <?echo Html::img('/images/image02.jpg', $options = ['alt' => 'Funky Looking Image', 
    'height' => '100%',
    'width' => '100%',] )?>
</div>
<div class="row">
    <?php if (!empty($articles)): ?>
        <?php
        $j = 0;
        for ($i = 0; $j < 3; $i++):
            if ($i == $id):continue;
            endif;
            $j++
            ?>
            <div class="col-sm-4 col-md-4">
                <div class="thumbnail">
                    <?echo Html::img(($articles[$i]->photo[0]->address).($articles[$i]->photo[0]->name), $options = ['alt' => 'Funky Looking Image', 
                    'height' => '100%',
                    'width' => '100%',] )?>
                    <div class="caption">
                        <a href="<?= yii\helpers\Url::to(['/articles/article', 'id' => $articles[$i]->id]) ?>">
                            <h3 align="center"><?= $articles[$i]->name ?></h3>
                            <p><?= mb_strimwidth($articles[$i]->text, 0, 120) ?></p></a>
                        <p><a href="/articles/index" class="btn btn-primary" role="button">Button</a> 
                            <a href="#" class="btn btn-default" role="button">Button</a></p>
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
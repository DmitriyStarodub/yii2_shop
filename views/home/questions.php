<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->registerCssFile('web/css/shop.css');
?>

<script>
    var wi = screen.width; // ширина  
    var he = document.body.clientHeight; // высота   
</script>
<div class="margin-breadcrumb">
    <ol class="breadcrumb">
        <li><a href="/home/index">Home</a></li>
        <li class="active">Questions</li>
    </ol>
</div>
<div>
    <ul><h1>Вопросы и ответы</h1>
        <p>Здесь вы найдете ответы на самые распространенные вопросы наших покупателей.</p>
        <ul><h2>Раздел №1</h2>
            <li><a href="#">Задаваемый вопрос этого раздела №1</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №2</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №3</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №4</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №5</a><br/></li>
        </ul>
        <ul><h2>Раздел №2</h2>
            <li><a href="#">Задаваемый вопрос этого раздела №1</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №2</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №3</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №4</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №5</a><br/></li>
        </ul>
        <ul><h2>Раздел №3</h2>
            <li><a href="#">Задаваемый вопрос этого раздела №1</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №2</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №3</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №4</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №5</a><br/></li>
        </ul>
        <ul><h2>Раздел №4</h2>
            <li><a href="#">Задаваемый вопрос этого раздела №1</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №2</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №3</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №4</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №5</a><br/></li>
        </ul>
        <ul><h2>Раздел №5</h2>
            <li><a href="#">Задаваемый вопрос этого раздела №1</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №2</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №3</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №4</a><br/></li>
            <li><a href="#">Задаваемый вопрос этого раздела №5</a><br/></li>
        </ul>
    </ul>
</div>
<div>
    <hr>
     <h2>Вы можете задать свой вопрс здесь</h2>
    <?php
    $form = ActiveForm::begin([
                'fieldConfig' => [
                    'template' => '<div class="row"><div class="col-sm-4 col-md-3">{label}</div><div class="col-sm-4 col-md-4 col-md-offset-0 col-sm-offset-1">{input}</div>{hint}{error}</div></br>',
                    'labelOptions' => ['class' => 'control-label ']
                ],
    ]);
    ?>
    <?= $form->field($newQuestion, 'email') ?>
    <?= $form->field($newQuestion, 'question')->textArea(['rows' => 5]) ?>
    <div class="row">
        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary col-xs-4 col-sm-2 col-md-2 col-xs-offset-2 col-md-offset-2 col-sm-offset-4']) ?>
            <?= Html::button('Отмена', [ 'type' => 'reset', 'class' => 'btn btn-primary col-xs-4 col-sm-2 col-md-2 col-md-offset-2 col-sm-offset-2  col-xs-offset-1']) ?>
        </div>
    </div>
     <?php ActiveForm::end(); ?>
</div>
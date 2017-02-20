<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

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
    <form>
        <h2>Вы можете задать свой вопрс здесь</h2>
        <p>Электронная почта<br>
        <input type="text" size="65" placeholder="email"></p>
        <p>Задайте свой вопрос<Br>
            <textarea name="comment" cols="67" rows="5" placeholder="Questions"></textarea></p>
        <p><input type="submit" value="Отправить">
            <input type="reset" value="Очистить"></p>
    </form>
</div>
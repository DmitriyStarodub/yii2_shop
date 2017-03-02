<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->registerCssFile('web/css/shop.css');
?>
<button class="btn btn-success" id="btn">Click me...</button>
<?php 
$js = <<<JS
        $('#btn').on('click', function(){
        $.ajax({
            url: 'test',
            data: {test: '123'},
            type: 'POST',
            success: function(res){
                console.log(res);
                },
                error: function(){
                    alert('Error!')
                }
                });
        });
        
JS;

$this->registerJs($js);
?>
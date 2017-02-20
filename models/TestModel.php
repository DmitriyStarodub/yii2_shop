<?php 
namespace app\models;

use yii\base\Model;

class TestModel extends Model
{
    public $name = 'test';
    public $email;
    public $subject;
    public $body;
    public $items;
    
    public function TestModel(){
        $this->items = array();
    }

}
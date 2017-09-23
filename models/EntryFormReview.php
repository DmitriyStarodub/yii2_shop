<?php

namespace app\models;
use app\models\AppModel;

// Модель формы ввода проекта
class EntryFormReview extends AppModel
{
    protected $id = null;
    public $name;
    public $email;
    public $value;
    public $limitations;
    public $dignity;
    public $comment;

    public function attributeLabels()
    {
        return array(
            'name' => 'Имя',
            'email' => 'Электронная почта',
            'value' => 'Оценка',
            'limitations' => 'Недостатки',
            'dignity' => 'Достоинства',
            'comment' => 'Комментарий',
        );
    }

    public function rules()
    {
        return [
            [['name', 'email', 'comment'], 'required', 'message'=>'{attribute} не может быть пустым'], 
            [['email'], 'email', 'message'=>'{attribute} введена неверно'],
        ];
    }
}
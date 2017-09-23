<?php

namespace app\models;
use app\models\AppModel;

// Модель формы ввода проекта
class EntryFormQuestion extends AppModel
{
    protected $id = null;
    public $email;
    public $question;

    public function attributeLabels()
    {
        return array(
            'email' => 'Электронная почта',
            'question' => 'Оценка',
        );
    }

    public function rules()
    {
        return [
            [['question', 'email'], 'required', 'message'=>'{attribute} не может быть пустым'], 
            [['email'], 'email', 'message'=>'{attribute} введена неверно'],
        ];
    }
}
<?php

namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of post
 *
 * @author Starodub
 */
class Review extends ActiveRecord {
    
    public static function tableName() {
       return 'Reviews';
    }
}
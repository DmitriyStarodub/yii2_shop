<?php

namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of post
 *
 * @author Starodub
 */
class ProductPhoto extends ActiveRecord {
    
    public static function tableName() {
       return 'ProductPhoto';
    }
}
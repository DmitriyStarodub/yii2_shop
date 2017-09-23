<?php

namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of post
 *
 * @author Starodub
 */
class MyTest extends ActiveRecord {
    
    public static function tableName() {
       return 'MyTest';
    }
}
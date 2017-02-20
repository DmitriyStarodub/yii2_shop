<?php

namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of post
 *
 * @author Starodub
 */
class Characteristics extends ActiveRecord {
    
    public static function tableName() {
       return 'Characteristics';
    }
}

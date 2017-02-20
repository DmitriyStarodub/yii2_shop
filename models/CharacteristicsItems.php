<?php

namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of post
 *
 * @author Starodub
 */
class CharacteristicsItems extends ActiveRecord {
    
    public static function tableName() {
       return 'CharacteristicsItems';
    }
}
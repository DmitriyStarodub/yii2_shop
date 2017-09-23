<?php

namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of post
 *
 * @author Starodub
 */
class SectionFilter extends ActiveRecord {
    
    public static function tableName() {
       return 'SectionFilter';
    }
}

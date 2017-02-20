<?php

namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of post
 *
 * @author Starodub
 */
class Section extends ActiveRecord {
    
    public static function tableName() {
       return 'Section';
    }
    
    public function getPhoto()
    {
        return $this->hasMany(Photo::className(), ['id' => 'photo_id'])
            ->viaTable('SectionPhoto', ['section_id' => 'id']);
    }
}


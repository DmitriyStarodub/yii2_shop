<?php

namespace app\models;
use yii\db\ActiveRecord;
use app\models\MyFilter;
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
    
    public function getMyFilter()
    {
        return $this->hasMany(MyFilter::className(), ['id' => 'filter_id'])
            ->viaTable('SectionFilter', ['section_id' => 'id']);
    }
    
}


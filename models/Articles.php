<?php

namespace app\models;
use yii\db\ActiveRecord;
use app\models\Photo;
/**
 * Description of post
 *
 * @author Starodub
 */
class Articles extends ActiveRecord {
    
    public static function tableName() {
       return 'Articles';
    }

public function getPhoto()
    {
        return $this->hasMany(Photo::className(), ['id' => 'photo_id'])
            ->viaTable('ArticlesPhoto', ['articles_id' => 'id']);
    }
    
    
}
<?php

namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of post
 *
 * @author Starodub
 */
class Product extends ActiveRecord {
    
    public static function tableName() {
       return 'Product';
    }
    
    public function getPhoto()
    {
        return $this->hasMany(Photo::className(), ['id' => 'photo_id'])
            ->viaTable('ProductPhoto', ['product_id' => 'id']);
    }
}
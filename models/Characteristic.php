<?php

namespace app\models;
use yii\db\ActiveRecord;
/**
 * Description of post
 *
 * @author Starodub
 */
class Characteristic extends ActiveRecord {
    
    public static function tableName() {
       return 'Characteristic';
    }
    
    public function getProduct()
    {
        return $this->hasMany(Product::className(), ['id' => 'product_id'])
            ->viaTable('ProductCharacteristic', ['characteristic_id' => 'id']);
    }
    
    public function getMyFilterItem()
    {
        return $this->hasMany(MyFilterItem::className(), ['id' => 'filterItem_id'])
            ->viaTable('CharacteristicFilterItem', ['characteristic_id' => 'id']);
    }
}

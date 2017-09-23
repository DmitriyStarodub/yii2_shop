<?php

namespace app\models;
use yii\db\ActiveRecord;
use app\models\MyFilterItem;
/**
 * Description of post
 *
 * @author Starodub
 */
class MyFilter extends ActiveRecord {
    
    public static function tableName() {
       return 'Filter';
    }
    
     public function getMyFilterItem()
    {
        return $this->hasMany(MyFilterItem::className(), ['id' => 'filteritem_id'])
            ->viaTable('FilterFilterItem', ['filter_id' => 'id']);
    }
}

<?php


namespace app\controllers;
use yii\web\Controller;
use app\models\Section;
/**
 * Description of AppController
 *
 * @author Starodub
 */
class AppController extends Controller {
    public function debug($arr){
    echo '<pre>' . print_r($arr, true) . '</pre>';
    }
    
     public function GetItemsDrobDounMain(){
        $sections = Section::find()->with('photo')->where(['parentSection_id' => NULL])->all(); 
        $items = array();
        array_push($items, 'Все разделы');
        foreach ($sections as $section)
        {
            array_push($items, $section->name);
        }
        return $items;
    }
}
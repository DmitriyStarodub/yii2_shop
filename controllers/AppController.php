<?php


namespace app\controllers;
use yii\web\Controller;
use app\models\Section;
use app\models\MyFilterItem;
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
    // принимает массив характеристик и возвращает массив id-шников элементов фильтра                   to do refactoring
    public function DirectCharacteristics($characteristics){
        if(is_array ($characteristics)){
         $filterItem = MyFilterItem::find()->asArray()->all();
         $filterItemId = array_fill(0, count($characteristics), 0);
         for($i = 0; $i < count($characteristics); $i++){
            for($j = 0; $j < count($filterItem); $j++){
                if(strcmp ( $characteristics[$i]['value'] , $filterItem[$j]['value']) == 0){
                    $filterItemId[$i] = $j + 1;
                    break;
                }
            }
            if($filterItemId[$i] != 0){
                continue;
            }
            if(preg_match ( '/г/', $characteristics[$i]['value']) != FALSE){
                if(preg_match ( '/к/', $characteristics[$i]['value']) != FALSE){
                    $str = substr($characteristics[$i]['value'], 0, (strlen($characteristics[$i]['value']) - 3));
                    if($str > 1 && $str <= 5){
                        $filterItemId[$i] = 17;
                    }
                    else if ($str > 5 && $str <= 10){
                        $filterItemId[$i] = 18;
                    }
                    else if ($str > 10 && $str <= 20){
                        $filterItemId[$i] = 19;
                    }
                    else if ($str > 20 && $str <= 50){
                        $filterItemId[$i] = 20;
                    }
                    else {
                        $filterItemId[$i] = 21;
                    }
                }
                else{
                    $str = substr($characteristics[$i]['value'], 0, (strlen($characteristics[$i]['value']) - 2));
                     if($str >= 1 && $str <= 100){
                        $filterItemId[$i] = 14;
                    }
                    else if ($str > 100 && $str <= 500){
                        $filterItemId[$i] = 15;
                    }
                    else if ($str > 500 && $str <= 1000){
                        $filterItemId[$i] = 16;
                    }
                    else {
                        // преобразование в кг и вызов функции перераспределение
                        $filterItemId[$i] = 17;
                    }
                }
                
            }
            else if (preg_match ( '/[xх]/', $characteristics[$i]['value']) != FALSE){
                $arr = preg_split ( '/[xх]/', $characteristics[$i]['value']); 
                $sum = 1;
                foreach ($arr as &$value) {
                    $sum = $sum * $value;
                       }
                if($sum <= 3000)
                  $filterItemId[$i] = 11;
                else if($sum > 3000 && $sum < 10000)
                  $filterItemId[$i] = 12;
                 else if($sum > 10000)
                  $filterItemId[$i] = 13;
            }
         }
              }
              return $filterItemId;
    }
}
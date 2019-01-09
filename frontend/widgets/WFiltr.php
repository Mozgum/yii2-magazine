<?php

namespace frontend\widgets;


use frontend\models\LibProduct;
use yii\bootstrap\Widget;

class WFiltr extends Widget
{
    
    public function init() {}
    
    
public function run() {
    $filtrItems = new LibProduct();
    return $this->render('filtr/view', [ 
      'model' => $filtrItems,  
        ]);
}
    
    
}
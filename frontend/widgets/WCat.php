<?php

namespace frontend\widgets;

use frontend\models\LibCategory;

use yii\bootstrap\Widget;

class WCat extends Widget
{
    public function init(){}

    public function run() {
        return $this->render('cat/view', [
            'model' => LibCategory::find()
        ->joinWith('libSubcategories')       
        ->all()
        ]);
    }
}
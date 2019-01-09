<?php

namespace frontend\widgets;

use frontend\models\LibCategory;

use yii\bootstrap\Widget;

class WCatSearch extends Widget
{
    public function init(){}

    public function run() {
        return $this->render('wcatsearch/view', [
            'WCatSearch' => LibCategory::find()->all()
        ]);
    }
}
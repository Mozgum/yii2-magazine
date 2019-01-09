<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use frontend\models\LibCategory;
use frontend\models\LibBrand;
use yii\widgets\Pjax;
use kartik\slider\Slider;

?>

<?php $form = ActiveForm::begin(); ?>
    
    
    
<?= $form->field($model, 'brand_id')->checkboxList(
                    \yii\helpers\ArrayHelper::map(LibBrand::find()->all(), 'id', 'name_brand')
                    ) ?>


 <?= $form->field($model, 'category_id')->checkboxList(
                    \yii\helpers\ArrayHelper::map(LibCategory::find()->all(), 'id', 'name_category')
                    ) ?>


<?php

echo '<b class="badge">$10</b> ' . Slider::widget([
    'name'=>'rating_3',
    'value'=>'250,650',
    'sliderColor'=>Slider::TYPE_GREY,
    'pluginOptions'=>[
        'min'=>10,
        'max'=>1000,
        'step'=>5,
        'range'=>true
    ],
]) . ' <b class="badge">$1,000</b>';


?>
 
       
       
           
        
      



 <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


<?php ActiveForm::end(); ?>


 <?php
$js = <<<JS
$('form').on('change', function(){
       
        var category_id = new Array();;
       $("input[name='LibProduct[category_id][]']:checked").each(function(i) {
    category_id.push($(this).val());
});
        
        
        var brand_id = new Array();;
       $("input[name='LibProduct[brand_id][]']:checked").each(function(i) {
    brand_id.push($(this).val());
});
        price = $('#w1').val(),
      //  console.log(value);
    $.ajax({ 
        url: '/frontend/web/site/val', 
        type: 'post',
        data: {
        category_id: category_id,
       brand_id: brand_id,
       price:price,
        
            }, 
        success: function(data) {
        
        $("#some_pjax_id").html( data );
           // console.log(data); 
        }, 
    }); 
        return false;
}); 

JS;

$this->registerJs($js);
?>

  <div id="table" class="col-md-12">
    
</div>           


   
   
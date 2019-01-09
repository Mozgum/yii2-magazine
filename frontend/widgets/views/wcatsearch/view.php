<?php

use yii\helpers\Url;
use yii\helpers\StringHelper;
?>

    
<?php foreach ($WCatSearch as $valSearch):?> 
<?php $result = StringHelper::truncate($valSearch->name_category, '15')  ?>
    <li><a class="clc" href="#"><?php echo $result ?></a></li>           
<?php endforeach; ?>
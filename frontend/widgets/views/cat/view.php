<?php

use yii\helpers\Url;

?>

    
<?php foreach ($model as $value):?>    
    <?php $result=$value->libSubcategories; ?>
        <?php  if ($result[0]){?>
<li class="hassubs">
    <a href="site/viewcategory?id=<?php echo $value->id; ?>"><?php echo $value->name_category; ?> <i class="fas fa-chevron-right"></i></a>
        <?php foreach ($result as $c):?>       
            <ul>
                <li><a href="site/viewsubcategory?id=<?php echo $value->id; ?>"> <?php echo $c->name_subcategory; ?><i class="fas fa-chevron-right"></i></a></li>
            </ul> 
        <?php endforeach;?>
</li> 
<?php }else{?> 
            <li><a href="site/viewcategory?id=<?php echo $value->id; ?>"><?php echo $value->name_category; ?> <i class="fas fa-chevron-right"></i></a></li>                
<?php } ?>
<?php endforeach; ?>

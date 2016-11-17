<?php

/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<div class="panel panel-primary">
    
 <h3><?php echo $testObj->username  ?></h3>
   <code> <p><?php echo  date("F j Y, g:i a", strtotime("1479178938"));?></p>
     <p><?php 

     echo  $testObj->created_at?></p>


    </code>
</div>
</div>

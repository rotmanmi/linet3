<?php
/***********************************************************************************
 * The contents of this file are subject to the GNU AFFERO GENERAL PUBLIC LICENSE Version 3
 * ("License"); You may not use this file except in compliance with the GNU AFFERO GENERAL PUBLIC LICENSE Version 3
 * The Original Code is:  Linet 3.0 Open Source
 * The Initial Developer of the Original Code is Adam Ben Hur.
 * All portions are Copyright (C) Adam Ben Hur.
 * All Rights Reserved.
 ************************************************************************************/
$this->params["breadcrumbs"]=array(
	Yii::t('app','Account Categories')=>array('index'),
	Yii::t('app','Create'),
);

$this->params["menu"]=array(
	//array('label'=>Yii::t('app','List Account Categories'),'url'=>array('index')),
	array('label'=>Yii::t('app','Manage Account Categories'),'url'=>array('admin')),
);

app\widgets\MiniForm::begin(array(
    'header' => Yii::t('app',"Create Account Category"),

)); 
?>

<?php echo $this->render('_form', array('model'=>$model)); 


 app\widgets\MiniForm::end(); 
?>
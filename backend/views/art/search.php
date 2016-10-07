<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Search;

$search = new Search();
?>

<div class="search">

<?php 
$form = ActiveForm::begin([
	'id'     => 'searchFilter',
	'method' => 'get',
	'action' => ['/art/search'],
	'enableClientValidation' => false,
	'enableAjaxValidation'   => false
]); 
?>

<?= 
$form->field($search, 'searchStr', [
	'inputOptions' => [ 
		'name'        => 'searchStr',
		'placeholder' => 'Search',
		'class'       => 'searchInput'
	]
])->label(false); 
?>

<?= Html::submitButton(false, ['class' => 'searchBtn']); ?>

<?php ActiveForm::end(); ?>
</div>


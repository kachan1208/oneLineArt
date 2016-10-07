<?php 
use yii\helpers\Html;
use yii\helpers\Url;

$clear = Url::to('art/index')
?>

<?php if($filter): ?>
	<div class="filter">
		<span>Filter</span> by <?= Html::encode($filter['title']) ?>: <span><?= Html::encode($filter['string']) ?></span>
		<span class="clearButton"><a href="<?= $clear ?>">--> Clear <--</a></span>
	</div>
<?php endif; ?>

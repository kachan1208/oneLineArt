<?php
use yii\widgets\LinkPager;
?>
<div class="pager bottom">
<?= LinkPager::widget([
	'pagination'     => $pager,
	'maxButtonCount' => 5,
	'prevPageLabel'  => '<=',
	'nextPageLabel'  => '=>',
]); ?>
</div>
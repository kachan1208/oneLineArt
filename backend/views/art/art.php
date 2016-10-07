<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php foreach($art as $val): ?>
<div class="column block">
	<div class="item">
		<div class="item-title"><?= Html::encode($val->title) ?></div>
		<label>Art: <span class="item-text"><?= Html::encode($val->text) ?></span></label><br>
		<label>Tags: <br>
			<?php foreach($val->tags as $tag): ?> 
				<?php $link = Url::to(['art/tag', 'tag' => $tag->id ]); ?>
				<span class="item-tags"><a href="<?= $link ?>"><?= Html::encode($tag->title) ?></a></span>
			<?php endforeach; ?>
		</label>
	</div>
</div>
<?php endforeach; ?>
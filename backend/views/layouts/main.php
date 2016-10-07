<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use backend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="header">
  <span class="title block"><a href="<?= Yii::$app->homeUrl ?>">ONE LINE ART</a></span>
  <span class="description block">
    One line art copy based on Yii2 framework. Created to learn some ascpects of framework. Original project link: <a href='http://1lineart.kulaone.com/'>http://1lineart.kulaone.com/</a>
  </span>

  <?= $this->render('/user/userAccessBlock'); ?>
  
</div>

<div class="content block">

<?= $content ?>

</div>

<div class="footer block">
Created by <a href="http://github.com/kachan1208/">Kachan</a><span class="copyright">&#169;</span>
</div>

</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>

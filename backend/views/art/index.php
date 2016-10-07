<?= $this->render('search') ?>
<div class="delimiter">
</div>
<?= $this->render('filter', ['filter' => $filter]) ?>
<?= $this->render('art', ['art' => $art]) ?>
<div class="delimiter">
</div>
<?= $this->render('pager', ['pager' => $pager]) ?>
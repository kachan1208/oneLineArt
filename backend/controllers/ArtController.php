<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;

use backend\models\Art;
use backend\models\Tags;
use backend\models\Search;

class ArtController extends Controller {
	private $pageSize;

	public function __construct($id, $module, $config = []) {
		parent::__construct($id, $module, $config);

		$this->pageSize = 20;
	}

	public function actionIndex() {
		$artQuery = Art::find();
		
		$filter = null;
		$pager = $this->getPager($artQuery->count());
		$art = $this->getArt($artQuery, $pager);
		

		return $this->render('index', ['art' => $art, 'pager' => $pager, 'filter' => $filter]);
	}

	public function actionTag($tag = NULL) {
		$artQuery = Art::find()->joinWith('tags')->where(['art_tag.tag_id' => $tag]);
		$tag = Tags::findOne($tag);
		
		$filter = $this->getFilter('tag', $tag->title);
		$pager = $this->getPager($artQuery->count());
		$art = $this->getArt($artQuery, $pager);
		
		return $this->render('index', ['art' => $art, 'pager' => $pager, 'filter' => $filter]);
	}

	public function actionSearch($searchStr = NULL) {
		// $artQuery = Art::find()->where('Match(')');
		$filter = $this->getFilter('string', $searchStr);

		return $this->render('index', ['art' => $art, 'pager' => $pager, 'filter' => $filter]);	
	}

	private function getPager($count) {
		$pager = new Pagination([
			'defaultPageSize' => $this->pageSize,
			'totalCount'      => $count
		]);

		return $pager;
	}

	private function getArt($query, $pager) {
		$content = $query->offset($pager->offset)
			->limit($pager->limit)
			->all();

		return $content;
	}

	private function getFilter($title, $string) {
		$result = [];
		if($title && $string) {
			$result = ['title' => $title, 'string' => $string];
		}

		return $result;
	}
}
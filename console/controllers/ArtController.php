<?php
namespace console\controllers;

use yii\console\Controller;
use backend\models\Art;
use backend\models\Tags;


class ArtController extends \yii\console\Controller {
	public function actionLoad($link = 'http://1lineart.kulaone.com/mock/art.json') {
		$art_data = file_get_contents($link);
		$art_data = json_decode($art_data, true);
		
		foreach($art_data as $value) {
			$art = new Art();
			$art->title = $value['title'];
			$art->text  = $value['art'];
			$art->save();

			$tags = explode(',', $value['category']);
			foreach($tags as $title) {
				$title = trim($title);

				$tag = Tags::find()->where(['title' => $title])->one();
				if(!$tag) {
					$tag = new Tags();
					$tag->title = $title;
					$tag->save();
				}

				$art->link('tags', $tag);
			}
		}

		return 0;
	}	

	public function getTags() {

	}

	public function save($art) {

	}
}
<?php

namespace backend\models;

use yii\db\ActiveRecord;
use backend\models\Tags;

class Art extends ActiveRecord {
	// public $title;
	// public $text;

	public function getTags() {
		return $this->hasMany(Tags::className(), ['id' => 'tag_id'])
			->viaTable('art_tag', ['art_id' => 'id']);
	}

	public function rules() {
		return [
			[['title', 'text'], 'required']
		];
	}
}
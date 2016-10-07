<?php

namespace backend\models;

use yii\db\ActiveRecord;
use backend\models\Art;

class Tags extends ActiveRecord {
	public function getArt() {
		return $this->hasMany(Art::className(), ['id' => 'art_id'])
			->viaTable('art_tag', ['tag_id' => 'id']);
	}

	public function rules() {
		return [
			['title', 'required']
		];
	}
}
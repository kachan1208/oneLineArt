<?php
namespace backend\Models;

use backend\models\Tags;
use backend\models\Art;
use yii\db\ActiveRecord;

class ArtTags extends ActiveRecord {
	public function getTag() {
		$this->hasOne(Tags::className(), ['id' => 'tag_id']);
	}

	public function getArt() {
		$this->hasOne(Art::className(), ['id' => 'art_id']);
	}
}
<?php

namespace backend\models;

use yii\base\Model;

class Search extends Model {
	public $searchStr;

	public function rules() {
		return [
			['searchStr', 'required']
		];
	}
}
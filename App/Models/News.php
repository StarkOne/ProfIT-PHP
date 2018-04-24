<?php

namespace App\Models;

use App\Db;
use App\Model;

class News extends Model{
	const TABLE = 'news';

	public function threeNews() {
		$db = Db::instance();
		return $db->query(
	      'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT 3',
	      static::class
	  );
	}
}
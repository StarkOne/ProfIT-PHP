<?php

namespace App;

class Db {

	use Singleton;

	protected $dbh;

	protected function __construct() {
		$this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=testphp','root' ,''); 
	}
	public function execute($sql, $values = [])
	{
		$sth = $this->dbh->prepare($sql);
		$res = $sth->execute($values);
		return $res;
	}
	public function query($sql, $class)
	{
		$sth = $this->dbh->prepare($sql);
		$res = $sth->execute();
		if(false !== $res) {
			return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
		}
		return [];
	}
}
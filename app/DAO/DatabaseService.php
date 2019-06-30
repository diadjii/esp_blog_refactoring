<?php

namespace AppNews\DAO;

abstract class DatabaseService {
	protected $_db = null;
	private static $_instance;

	public function __construct($db = null) {
		$this->_db = $db == null ? $this->getInstance() : $db;
	}

	private function getInstance() {
		if (self::$_instance == null) {
			return new \PDO("mysql:host=localhost;dbname=news_db", "root", "passer", array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC));
		}
		// return self::$_instance;
	}
}

<?php

namespace AppNews\DAO;

use AppNews\DAO\DatabaseService;

/**
 *
 */
class CategoryDAO extends DatabaseService {

	public function create(Category $category) {

	}

	public function findById() {

	}

	public function update() {

	}

	public function delete() {

	}

	public function getAll() {
		$pdoStatement = $this->_db->query("SELECT * FROM category ");

		return $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);
	}
}

<?php
namespace AppNews\Model;
/**
 *
 */
class Category {
	private $id;
	private $name;
	private $created_at;

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $id
	 *
	 * @return self
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param mixed $name
	 *
	 * @return self
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}

	/**
	 * @param mixed $created_at
	 *
	 * @return self
	 */
	public function setCreatedAt($created_at) {
		$this->created_at = $created_at;

		return $this;
	}
}

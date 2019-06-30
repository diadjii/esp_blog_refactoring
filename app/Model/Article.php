<?php
namespace AppNews\Model;
/**
 *
 */
class Article {
	private $id;
	private $title;
	private $content;
	private $slug;
	private $image;
	private $category_id;
	private $created_at;
	private $updated_at;

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
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @param mixed $title
	 *
	 * @return self
	 */
	public function setTitle($title) {
		$this->title = $title;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @param mixed $content
	 *
	 * @return self
	 */
	public function setContent($content) {
		$this->content = $content;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSlug() {
		return $this->slug;
	}

	/**
	 * @param mixed $slug
	 *
	 * @return self
	 */
	public function setSlug($slug) {
		$this->slug = $slug;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * @param mixed $image
	 *
	 * @return self
	 */
	public function setImage($image) {
		$this->image = $image;

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

	/**
	 * @return mixed
	 */
	public function getUpdatedAt() {
		return $this->updated_at;
	}

	/**
	 * @param mixed $updated_at
	 *
	 * @return self
	 */
	public function setUpdatedAt($updated_at) {
		$this->updated_at = $updated_at;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCategoryId() {
		return $this->category_id;
	}

	/**
	 * @param mixed $category_id
	 *
	 * @return self
	 */
	public function setCategoryId($category_id) {
		$this->category_id = $category_id;

		return $this;
	}
}

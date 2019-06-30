<?php
namespace AppNews\Model;
/**
 *
 */
class Comment {
	private $id;
	private $content;
	private $pseudo;
	private $article_id;
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
	public function getPseudo() {
		return $this->pseudo;
	}

	/**
	 * @param mixed $pseudo
	 *
	 * @return self
	 */
	public function setPseudo($pseudo) {
		$this->pseudo = $pseudo;

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
	public function getArticleId() {
		return $this->article_id;
	}

	/**
	 * @param mixed $article_id
	 *
	 * @return self
	 */
	public function setArticleId($article_id) {
		$this->article_id = $article_id;

		return $this;
	}
}

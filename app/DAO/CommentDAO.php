<?php
namespace AppNews\DAO;

use AppNews\Model\Comment;

/**
 *
 */
class CommentDAO extends DatabaseService {
	public function create(Comment $comment) {
		$pdoStatement = $this->_db->prepare("INSERT INTO comment (pseudo,comment,article_id) VALUES (:pseudo, :content, :article_id)");
		$pdoStatement->bindValue(":pseudo", $comment->getPseudo(), \PDO::PARAM_STR);
		$pdoStatement->bindValue(":content", $comment->getContent(), \PDO::PARAM_STR);
		$pdoStatement->bindValue(":article_id", $comment->getArticleId(), \PDO::PARAM_INT);

		if ($pdoStatement->execute()) {
			return $this->_db->lastInsertId();
		} else {
			return 0;
		}
	}

	public function findByArticleId($article_id) {
		$pdoStatement = $this->_db->query("SELECT * FROM comment WHERE article_id = $article_id ORDER BY `id` DESC");

		return $pdoStatement->fetchAll(\PDO::FETCH_ASSOC);
	}
}

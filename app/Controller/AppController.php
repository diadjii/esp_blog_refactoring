<?php
namespace AppNews\Controller;

use AppNews\DAO\ArticleDAO;
use AppNews\DAO\CategoryDAO;
use AppNews\DAO\CommentDAO;
use AppNews\Model\Article;
use AppNews\Model\Comment;

/**
 *
 */
class AppController {

	public function admin($request) {
		include "../views/admin.php";
	}

	public function createArticle($request) {
		$title = $request['title'];
		$categoryId = $request['category-id'];
		$content = $request['content'];
		$slug = str_replace(" ", "_", strtolower($title));

		$article = new Article();
		$article->setTitle($title);
		$article->setSlug($slug);
		$article->setCategoryId($categoryId);
		$article->setContent($content);

		$article_dao = new ArticleDAO();

		if ($article_dao->create($article)) {
			echo true;
		} else {
			echo false;
		}
	}

	private function createSlug($title) {
		return str_replace(" ", "_", strtolower($title));
	}

	public function getAllCategory() {
		$categoryService = new CategoryDAO();
		// $t = $categoryService->getAll();
		$result = array();

		try {
			$result = $categoryService->getAll();
			echo json_encode($result);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	public function getAllArticles() {
		$article_dao = new ArticleDAO();

		$result = $article_dao->findAll();

		echo json_encode($result);
	}

	public function getArticle($request) {
		include "../views/detail.php";
	}

	public function home() {
		include "../views/home.php";
	}

	public function getArticleDetail($request) {
		$article_dao = new ArticleDAO();
		$slug = $request['title'];
		// echo $slug;
		$result = $article_dao->findBySlug($slug);

		echo json_encode($result);
	}

	public function createComment($request) {
		$pseudo = $request['pseudo'];
		$content = $request['comment'];
		$article_id = $request['article_id'];

		$comment_dao = new CommentDAO();

		$comment = new Comment();

		$comment->setPseudo($pseudo);
		$comment->setContent($content);
		$comment->setArticleId($article_id);

		if ($comment_dao->create($comment)) {
			echo true;
		} else {
			echo false;
		}
	}

	public function getComment($request) {
		$article_id = $request['id'];

		$comment_dao = new CommentDAO();
		$res = $comment_dao->findByArticleId($article_id);

		echo json_encode($res);
	}
}

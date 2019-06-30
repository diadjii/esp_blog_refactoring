<?php
namespace AppNews;
use AppNews\Controller\AppController;

// require "vendor/autoload.php";

class Routes {
	private $request;
	private $urls = [];
	private $controller;

	function __construct() {
		$this->request = $_SERVER;
		$this->controller = new AppController();
	}

	public function get($url, $method) {
		$new = array($url => $method);
		$this->urls = array_merge($new, $this->urls);
	}

	public function startRouter() {
		$this->currentRequest();
	}

	private function currentRequest() {
		$uri = $this->request['PATH_INFO'];

		switch ($uri) {
		case '/accueil':
			$this->controller->home($_GET);
			break;
		case '/':
			$this->controller->home($_GET);
			break;
		case '/admin':
			$this->controller->admin($_GET);
			break;
		case '/article/create':
			$this->controller->createArticle($_POST);
			break;
		case '/article/all':
			$this->controller->getAllArticles();
			break;
		case '/articles':
			$this->controller->getArticle($_GET);
			break;
		case '/article/detail':
			$this->controller->getArticleDetail($_GET);
			break;
		case '/category/all':
			$this->controller->getAllCategory();
			break;
		case '/comment/create':
			$this->controller->createComment($_POST);
			break;
		case '/comment/all':
			$this->controller->getComment($_GET);
			break;
		default:
			$this->controller->home($_GET);
			break;
		}
	}
}

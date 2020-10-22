<?php

namespace App\src\controller;
use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;

class FrontController{

    private $articleDAO;
    private $commentDAO;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
    }

    public function home()
    {
        $allArticles = $this->articleDAO->getAllArticles();
        require '../templates/home.php';
    }
    public function article($articleId)
    {
        $article = $this->articleDAO->getOneArticle($articleId);
        $allComments = $this->commentDAO->getCommentsFromArticle($articleId);
        require '../templates/single.php';
    }
}
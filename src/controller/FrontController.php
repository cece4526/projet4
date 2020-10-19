<?php

namespace App\src\controller;
use App\src\DAO\ArticleDAO;

class FrontController{

    public function home()
    {
        $article = new ArticleDAO();
        $allArticles = $article->getAllArticles();
        require '../templates/home.php';
    }
    public function article($articleId)
    {
        $article = new ArticleDAO();
        $allArticles = $article->getOneArticle($articleId);
        $comment = new CommentDAO();
        $allComments = $comment->getCommentsFromArticle($_GET['articleId']);
        require '../templates/single.php'
    }
}
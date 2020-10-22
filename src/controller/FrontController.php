<?php

namespace App\src\controller;
use App\src\DAO\ArticleDAO;
use App\src\DAO\CommentDAO;
use App\src\model\View;

class FrontController{

    private $articleDAO;
    private $commentDAO;
    private $view;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
        $this->view = new View();
    }

    public function home()
    {
        $allArticles = $this->articleDAO->getAllArticles();
        return $this->view->render('home',[
            'allArticles' => $allArticles 
        ]);
    }
    public function article($articleId)
    {
        $article = $this->articleDAO->getOneArticle($articleId);
        $allComments = $this->commentDAO->getCommentsFromArticle($articleId);
        return $this->view->render('single',[
            'article'=>$article,
            'allComments' => $allComments
        ]);
    }
}
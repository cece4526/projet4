<?php

namespace App\src\controller;

class FrontController extends Controller{
    public function home(){
        $articles = $this->articleDAO->getAllArticles();
        return $this->view->render('home', [
           'allArticles' => $articles
        ]);
    }

    public function article($articleId){
        $article = $this->articleDAO->getOneArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);
        return $this->view->render('single', [
            'article' => $article,
            'allComments' => $comments
        ]);
    }
}
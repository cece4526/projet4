<?php
namespace App\src\DAO;

class ArticleDAO extends DAO{
    public function getAllArticles(){
        $sql = 'SELECT id, title, content, author, createdAt FROM article ORDER BY id DESC';
        return $this->createQuery($sql);
    }
    public function getOneArticle($articleId){
        $sql = 'SELECT id, title, content, author, createdAt FROM article WHERE id = ?';
        return $this->createQuery($sql,[$articleId]);
    }
}
<?php
namespace App\src\DAO;
use App\src\model\Article;

class ArticleDAO extends DAO{

    private function buildObject ($row)
    {
        $article = new Article();
        $article->setId($row['id']);
        $article->setTitle($row['title']);
        $article->setContent($row['content']);
        $article->setAuthor($row['author']);
        $article->setCreatedAt($row['createdAt']);
        return $article;
    }
    public function getAllArticles(){
        $sql = 'SELECT id, title, content, author, createdAt FROM article ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $allArticles = [];
        foreach($result as $row){
            $articleId = $row['id'];
            $allArticles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $allArticles;
    }
    public function getOneArticle($articleId){
        $sql = 'SELECT id, title, content, author, createdAt FROM article WHERE id = ?';
        $result = $this->createQuery($sql,[$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
    }
}
<?php

class Post extends DataBase{
    public function getAllPosts(){
        $sql = 'SELECT id, title, content, author, createdAt FROM article ORDER BY id DESC';
        return $this->createQuery($sql);
    }
    public function getOnePost($postId){
        $sql = 'SELECT id, title, content, author, createdAt FROM article WHERE id = ?';
        return $this->createQuery($sql,[$postId]);
    }
}
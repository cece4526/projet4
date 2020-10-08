<?php

class Post{
    public function getAllPosts(){
        $db = new DataBase();
        $connection = $db->getConnection();
        $result = $connection->query('SELECT id, title, content, author, createdAt FROM article ORDER BY id DESC');
        return $result;
    }
    public function onePost(){
        $db = new DataBase();
        $connection = $db->getConnection();
    }
}
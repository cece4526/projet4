<?php

class Comment extends DataBase{

    public function getCommentsFromPost($postId){
        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        return $this->createQuery($sql, [$postId]);
    }

}
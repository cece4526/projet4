<?php

namespace App\src\model;

class Article(){
    //@var int
    private $id;
    //@var string
    private $title;
    //@var string
    private $content;
    //@var string
    private $author;
    //var \DateTime
    private $createdAt;

    //return int
    public function getId()
    {
        return $this->id;
    }

    //@param int $id
    public function setId($id)
    {
        $this->id = $id;
    }

    //return string
    public function getTitle()
    {
        return $this->title;
    }

    //@param string $title
    public function setTitle()
    {
        $this->title = $title;
    }
}
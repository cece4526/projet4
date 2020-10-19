<?php

require '../config/Dev.php';
require '../vendor/autoload.php';

try{

    if(isset($_GET['route'])){
        if($_GET['route'] === 'article'){
            require'../templates/single.php';
        }
        else{
            echo 'page inconue';
        }
        }
    else{
        require '../templates/home.php';
    }
}
catch(Exception $e){
    echo 'Erreur';
}
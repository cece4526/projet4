<?php

namespace App\config;
use App\src\controller\FrontController;
use Exception;

class Router{

    public function run(){
        try{

            if(isset($_GET['route'])){
                if($_GET['route'] === 'article'){
                    $frontController = new FrontController();
                    $frontController->article($_GET['articleId']);
                }
                else{
                    echo 'page inconue';
                }
                }
            else{
                $frontController = new FrontController();
                $frontController->home();
            }
        }
        catch(Exception $e){
            echo 'Erreur';
        }
    }
}
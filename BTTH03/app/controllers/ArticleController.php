<?php
require_once('../app/services/ArticleService.php');
class ArticleController{
    public function index(){
        echo "Controller : Go to Articles";
        $articles = ArticleService::getAllArticles();
        include("../app/views/article/Articles.php");
    }
}

    
?>
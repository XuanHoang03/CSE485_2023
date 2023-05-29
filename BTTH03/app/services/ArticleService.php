<?php
require_once("../app/models/Article.php");

class ArticleService{
    public static function getAllArticles(){
    try{
        $conn= new PDO('mysql:host=localhost;dbname=project18','root','2212');
        $sql="SELECT * FROM article";
        $stmt=$conn->query($sql);
        $articles = [];
        while($result = $stmt->fetch() ){
            $article = new Article($result['id'],$result['title'],$result['summary'],$result['content']);
            $articles[] = $article;
        }
        return $articles;
    }
    catch(PDOException $e){
        $articles = [];
        return $article;
    }
    
    }
}



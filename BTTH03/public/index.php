<?php
$route = isset($_GET['route'])?$_GET['route']:'home';
if($route =='articles'){
    require_once("../app/controllers/ArticleController.php");
    $articleController = new ArticleController();
    $articleController->index();
}
else if($route =='home'){
    require_once("../app/controllers/HomeController.php");
    $homeController = new HomeController();
    $homeController->index();
}
?>
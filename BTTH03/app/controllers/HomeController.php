<?php
class HomeController{
    public function index(){
        echo "Controller: Move to Homepage";

        include("../app/views/home/index.php");
    }
}
?>
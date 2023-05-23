<?php
session_start();
if(!isset($_SESSION['isLogin'])){
    header("Location: Login.php");
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $_SESSION =[];
    header("Location: Login.php");
}
?><h2>
<?php
$username=$_SESSION['isLogin']
?>
<?="Giảng viên: ".$username?>
<form action="student.php" method = "post">
    <input type="submit" value="Đăng xuất">
</form>
</h2>

<?=
"Khóa học bạn có: "
?>
<?php


?>

<?php
session_start();
if(!isset($_SESSION['isLogin'])){
    header("Location: Login.php");
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $_SESSION =[];
    header("Location: Login.php");
}


// echo"<pre>";
// print_r($_SESSION);

?>
<h2>
<?="Sinh viên: ". $_SESSION['username'] ?>
<form action="student.php" method = "post">
    <input type="submit" value="Đăng xuất">
</form>
</h2>
<h3>
<?=
"Khóa học của bạn:";
?>
</h3>
<?php
$id = $_SESSION['isLogin'];
$conn = new PDO("mysql:host=localhost;dbname=th2","root","2212");
$sql = "SELECT c.course_title , c.course_description , yc.class_id
        FROM courses c , courseclasses cc , yourclass yc 
        WHERE yc.class_id = cc.class_id 
        AND cc.course_id = c.course_id
        AND yc.student_id = $id ;";
$stmt = $conn->query($sql);
$courses = $stmt->fetchAll();

foreach ($courses as $course){ ?>
<a href="CourseClass.php?course=<?=$course['class_id']?>">
    <?= $course['course_title']?>
</a>
    <br>
    <?=">".$course['course_description']."<" ?>
    <br>
<?php
}
?>


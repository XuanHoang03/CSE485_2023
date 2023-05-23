<?php
session_start();
if(!isset($_SESSION['isLogin'])){
    header("Location: Login.php");
}

$course = $_GET['course'];
$id =$_SESSION['isLogin'];
$conn = new PDO("mysql:host=localhost;dbname=th2","root","2212");
$sql = "SELECT * FROM courseclasses cc , teacher t 
        WHERE cc.class_id=$course AND cc.teacher_id = t.teacher_id;" ;
$stmt = $conn->query($sql);
$class=$stmt->fetch();
$sql_1 = "SELECT a.date , a.attendance_status , cc.course_id
        FROM courseclasses cc , attendance a 
        WHERE cc.class_id = $course AND a.class_id = cc.class_id AND a.student_id = $id";
$stmt1 = $conn->query($sql_1);
$attendances=$stmt1->fetchAll();
// echo "<pre>";
// print_r($attendances);
// echo "</pre>";
?>
<h1>
<?="Khóa học: ".$class['Course_name'] ?>
</h1>
<br>
<p>
    <?= 
    "Giảng viên: " . $class['teacher_name'];
    ?>
    <br>
    <?= 
    "Liên hệ: " . $class['contact_info'];
    ?>
    <br>
    <?= 
    "Bắt đầu: " . date($class['Course_start']);
    ?>
    <br>
    <?= 
    "Kết thúc: " . date($class['Course_end']);
    ?>
</p>
<br>
<?php
foreach($attendances as $attendance){ ?>
<a href="attendance.php?date=<?=$attendance['date']."&status=".$attendance['attendance_status']."&course=".$attendance['course_id'] ?>">
    <?= "Điểm danh ngày " . $attendance['date'] .": " .(($attendance['attendance_status']=== 0) ? 'Vắng' : 'Có mặt')?>
    <br>
</a>
<?php
}
?>

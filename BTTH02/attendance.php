<?php
session_start();
if (!isset($_SESSION['isLogin'])) {
    header("Location: Login.php");
    exit();
}

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

$status = $_GET['status'];
$course = $_GET['course']
?>
<h1>
    <?= "Điểm danh ngày " . $date ?>
</h1>

<form action="attendance_update.php?date=<?=$_GET['date']."&id=".$_SESSION['isLogin']."&course=".$course ?>" method="POST">
    <h3>
        <?= "Vắng" ?>
        <input type="radio" name="option" value=0
        <?= ($status == 0) ? "checked" :"" ?>
        >
    </h3>
    <h3>
        <?= "Muộn" ?>
        <input type="radio" name="option" value=1
        <?= ($status == 1) ? 'checked' :'' ?>
        >
    </h3>
    <h3>
        <?= "Có mặt" ?>
        <input type="radio" name="option" value=2
        <?= ($status == 2) ? 'checked' :'' ?>
        >
    </h3>
    <!-- <input type="text" name="txt_option"> -->
    <input type="submit" value="Lưu">
</form>

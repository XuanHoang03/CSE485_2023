<?php
$date = $_GET['date'];
$id = $_GET['id'];
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";


if (isset($_POST['option'])) {
    $selectedOption = $_POST['option'];

    try {
        $conn = new PDO("mysql:host=localhost;dbname=th2", "root", "2212");

        $sql = "UPDATE attendance SET attendance_status = :selectedOption 
        WHERE student_id = :id AND date = :date";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':selectedOption', $selectedOption);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':date', $date);
        $stmt->execute();
        $_SESSION['isSubmit'] = $selectedOption;
        
        // Redirect after successful update
        header("Location: CourseClass.php?course=".$_GET['id']);
        exit();
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>
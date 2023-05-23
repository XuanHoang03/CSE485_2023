<?php

try{
    session_start();
    $conn = new PDO("mysql:host=localhost;dbname=th2","root","2212");
    if(!$conn){
        die("Can't connect");
    }
    if(isset($_POST['login'])){
        $id = $_POST['id'];
        $password = $_POST['password'];
        if($id=="" || $password=="")  
        {  
             $message = '<label>Cần nhập hết các vùng</label>'; 
        }
        else{
            $sql="SELECT student_name FROM students WHERE student_id=:id and password =:password;";

            $stmt=$conn->prepare($sql);
            $stmt->execute(['id'=>$id,
                            'password' => $password]);
            $name = $stmt->fetch()[0];

            if($stmt->rowCount() > 0){
                    $_SESSION['isLogin']=$id;
                    $_SESSION['username']=$name;
                    header("Location: student.php");    
            }    
            else{
                $message = "Sai thông tin đăng nhập";
            }
    }
    }
}
catch(PDOException $e){
    $message = $e->getMessage();
}


?>

<form method="POST" action="Login.php">
<h1>Đăng nhập</h1>  
<label>Mã sinh viên: <input type="text" name="id" id=""></label>
<label>Mật khẩu: <input type="password" name="password" id=""></label>
<input type="submit" name="login" value="Đăng nhập">
</form>

<?= $message ?>
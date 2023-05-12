<?php
include "./Student.php";
include "./StudentDAO.php";
include "./ReadData.php";
include "./WriteData.php";
?>
<?php
$GroupA = new StudentDAO();
getDataFromText("./data.txt", $GroupA);
$message = "";

$sinhvien=new Student(0,0,"");
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Name=$_POST["Name"];
    $Age=$_POST["Age"];
    $ID = $_POST["ID"];
    if(($Age && $Name && $ID) != ""){
        if($GroupA->ifHave($ID)== true){
            $sinhvien->setAge($Age);
            $sinhvien->setId($ID);
            $sinhvien->setName($Name);
            WriteDataToFile("./data.txt",$sinhvien);
            header("Location: ./index.php");
        }
    }
    
}

?>


<form action="" method="POST">
Tên Sinh Viên: <input type="text" name="Name" value="">
Tuổi: <input type="number" name="Age" value="Age">
ID: <input type="number" name="ID"value="ID">
<input type="submit" value="Save" action = "">

</form>


<?php
echo "Thông tin sinh viên:";
$GroupA->GetAll();
?>
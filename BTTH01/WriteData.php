<?php
include "./Student.php";
?>

<?php
include "./StudentDAO.php";
?>

<?php
function WriteDataToFile(string $file,Student $studentTemp){
$myfile = fopen($file, "a");
$text ="\n". $studentTemp->getId().",".$studentTemp->getName().",".$studentTemp->getAge();
fwrite($myfile, $text);
fclose($myfile);
}
?>

<?php
$StudentA = new Student(10,2,"Bui Thanh Nam");
WriteDataToFile("./data.txt",$StudentA);
echo file_get_contents("./data.txt"); 
?>


<?php include "./Student.php"?>
<?php include "./StudentDAO.php"?>
<?php
// $CLassB = new StudentDAO();
// $student1 = new Student(1,12,"Nguyen Xuan Hoang");
// $CLassB->create($student1);
// $i=0;
// $data = fopen("./data.txt", "r");
// while(!feof($data)){
    
//     $line = fgets($data);
//     $array = explode(",",$line);
//     list($ID,$Name,$Age) = $array;
//     $new_obj[$i] = new Student($ID,$Age,$Name);
//     $i+=1;
// }
?>


<?php
// for($x = 0 ; $x < sizeof($new_obj);$x++){
// $CLassB->create($new_obj[$x]);   
// echo "<pre>";
// print_r($CLassB->_groups[$x]);
// }
?>

<?php
// $CLassB->GetAll();

?>
<?php
function getDataFromText(string $file, StudentDAO $CLassB){
    // $CLassB = new StudentDAO();
    $data = fopen($file, "r");
    $i=0;
    while(!feof($data)){
        $line = fgets($data);
        $array = explode(",",$line);
        list($ID,$Name,$Age) = $array;
        $new_obj[$i] = new Student($ID,$Age,$Name);
        $i+=1;
    }
    for($x = 0; $x < sizeof($new_obj); $x++){
        $CLassB->create($new_obj[$x]);
    }
}
?>

<?php
    $ClassA = new StudentDAO();
    getDataFromText("./data.txt",$ClassA);
    echo "<pre>";
    print_r($ClassA->_groups);
?>



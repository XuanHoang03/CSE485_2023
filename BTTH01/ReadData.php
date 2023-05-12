
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
    // $ClassA = new StudentDAO();
    // getDataFromText("./data.txt",$ClassA);
    // echo "<pre>";
    // print_r($ClassA->_groups);
?>



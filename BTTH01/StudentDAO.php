<?php
class StudentDAO{

    public array $_groups;

    function __construct(){
        $this->_groups = [];
    }

    public function create(Student $student ){
         array_push($this->_groups,$student);
    }

    public function read(Student $student){
        echo "ID: " . $student->getId() ."\tName: " . $student->getName() . "\tAge: " . $student->getAge() ; 
    }

    public function getElementById($ID){
        $array = $this->_groups;
        foreach( $array as $elements )
        {
            if($elements->getId() == $ID){
                return $elements;
            }
        }
        return false;
    }

    public function updateAgeByID(int $ID,int $age){
        $this->getElementById($ID)->setAge($age);
    }
    public function updateNameByID(int $ID,string $name){
        $this->getElementById($ID)->setName($name);
    }
    public function deleteByID($ID){
    $studentTemp = $this->getElementById($ID);
    $key = array_search($studentTemp, $this->_groups);
    if($key !== false)
        {
        unset($this->_groups[$key]);    
        } 
    }
    public function GetAll(){
        foreach( $this->_groups as $elements){
            echo "<br>";
            $this->read($elements);
        }
    }

    public function ifHave($ID){
        foreach($this->_groups as $element){
            if($element->getId() == $ID){
                return false;
            }
            else{
                return true;
            }
        }
    }
}
?>


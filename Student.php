<?php
class Student{
    private int $ID;
    private int $age;
    private string $name;

    public function setID(int $ID){
        $this->ID = $ID;
    }
    public function setAge(int $age){
        $this->age = $age;
    }
    public function setName(string $name){
        $this->name = $name;
    }

    function __construct(int $ID , int $age , string $name){
        $this->setAge($age);
        $this->setID($ID);
        $this->setName($name);
    }
    function getId(){
        return $this->ID;
    }
    function getAge(){
        return $this->age;
    }

    function getName(){
        return $this->name;
    }

}
?>
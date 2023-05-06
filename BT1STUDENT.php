<?php
class Student {
  private $id;
  private $name;
  private $age;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getAge() {
    return $this->age;
  }

  public function setAge($age) {
    $this->age = $age;
  }
}

class StudentDAO {
  private $students = array();

  public function create($student) {
    array_push($this->students, $student);
  }

  public function read($id) {
    foreach ($this->students as $student) {
      if ($student->getId() == $id) {
        return $student;
      }
    }
    return null;
  }

  public function update($id, $newStudent) {
    foreach ($this->students as &$student) {
      if ($student->getId() == $id) {
        $student = $newStudent;
        return true;
      }
    }
    return false;
  }

  public function delete($id) {
    foreach ($this->students as $key => $student) {
      if ($student->getId() == $id) {
        unset($this->students[$key]);
        return true;
      }
    }
    return false;
  }

  public function getAll() {
    return $this->students;
  }
}
?>
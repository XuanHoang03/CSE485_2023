<?php
class StudentDAO {

private $students = [];

public function createStudent(Student $student) {
    $this->students[] = $student;
}

public function readAllStudents() {
    return $this->students;
}

public function readStudentById($id) {
    foreach ($this->students as $student) {
        if ($student->getId() == $id) {
            return $student;
        }
    }
    return null;
}

public function updateStudent(Student $student) {
    $index = array_search($student, $this->students);
    if ($index !== false) {
        $this->students[$index] = $student;
    }
}

public function deleteStudentById($id) {
    foreach ($this->students as $key => $student) {
        if ($student->getId() == $id) {
            unset($this->students[$key]);
            break;
        }
    }
}

}

?>
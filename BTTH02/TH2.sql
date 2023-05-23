CREATE TABLE Students (
  student_id INT PRIMARY KEY,
  student_name VARCHAR(50),
  date_of_birth DATE,
  contact_info VARCHAR(100),
  PASSWORD CHAR(20)
);


CREATE TABLE Courses (
  course_id INT PRIMARY KEY,
  course_title VARCHAR(100),
  course_description TEXT
);


attendanceCREATE TABLE attendance (
  attendence_id INT PRIMARY KEY auto_increment,
  date DATE,
  class_id INT,
  student_id INT,
  attendance_status TINYINT DEFAULT 0,
  FOREIGN KEY (class_id) REFERENCES CourseClasses(class_id),
  FOREIGN KEY (student_id) REFERENCES Students(student_id)
);

CREATE TABLE Teacher (
  teacher_id INT PRIMARY KEY,
  teacher_name VARCHAR(50),
  contact_info VARCHAR(100),
  PASSWORD CHAR(20)
);


CREATE TABLE CourseClasses (
  class_id INT PRIMARY KEY,
  course_id INT,
  teacher_id INT,
  Course_start DATE,
  Course_end DATE,
  FOREIGN KEY (course_id) REFERENCES Courses(course_id),
  FOREIGN KEY (teacher_id) REFERENCES teacher(teacher_id)
);


CREATE TABLE YourClass(
	student_id INT ,
	class_id INT,
	FOREIGN KEY(student_id) REFERENCES students(student_id),
	FOREIGN KEY(class_id) REFERENCES courseclasses(class_id)
);

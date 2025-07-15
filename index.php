<?php

Class Student {
 public $name;
 public $course;
 public static $subjects = [];

 public function __construct(string $name,string $course){
    $this->name = $name;
    $this->course = $course;
}

public function displayInfo(){
    echo "Name:".$this->name."\n";
    echo "Course:".$this->course."\n";
    echo "Subjects:\n";
    print_r(self::$subjects);
}

}


$array = ["Math", "English", "Science", "PE"];
Student::$subjects=$array;

$student1 = new Student ("Carl", "BSIT");
$student1->displayInfo();


?>
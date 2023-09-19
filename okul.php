<?php
error_reporting(E_ALL); // hataların gösterilmesi için
ini_set('display_errors', 'On'); // hataların gösterilmesi için

include './oop/Models/Person.php';
include './oop/Models/Student.php';
include './oop/Models/Teacher.php';
include './oop/Models/Lesson.php';

$student1 = new Student('Ali', 'Kaya', 12511111111);
echo $student1->getInformations();

$lesson1 = new Lesson('Matematik', 7);
$lesson2 = new Lesson('İngilizce', 9);
$student1->addLesson($lesson1);
$student1->addLesson($lesson2);

$student1Lessons = $student1->getLessons();

//print_r($student1Lessons);

echo '<br>';
foreach ($student1Lessons as $lesson) {
    echo $lesson->getName();
    echo '<br>';
}


$student1->setStudentNumber(55);
//$student1->setStudentNumber(552);
//print_r($student1);

$teacher1 = new Teacher('Mehmet', 'Kaya', 12345678910);
$teacher1->addLesson($lesson1);
$teacher1->addLesson($lesson2);

$teacher1Lessons = $teacher1->getLessons();
echo '<br>';
echo '<br>';
foreach ($teacher1Lessons as $lesson) {
    echo $lesson->getName();
    echo '<br>';
}

$teacher1->setPbikNumber(12345678);
$teacher1->setPbikNumber(12345679);
//print_r($teacher1);
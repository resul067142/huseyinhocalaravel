<?php
error_reporting(E_ALL); // hataların gösterilmesi için
ini_set('display_errors', 'On'); // hataların gösterilmesi için

include './oop/Interfaces/Loggable.php';
include './oop/Interfaces/Printable.php';
include './oop/Models/Person.php';
include './oop/Models/Student.php';
include './oop/Models/Car.php';
include './oop/Models/Lesson.php';

$student = new Student('Ali', 'Kaya', 12345678910);
$student->addLesson(new Lesson('Matematik', 7));
$student->writeLog(); // dosyaya yazıyor
echo '<br>';
$student->sendPrinter();

$student = new Student('Ayşe', 'Kaya', 12345678910);
$student->writeLog();

echo '<br>';
$car = new Car();
$car->writeLog();
$car->sendPrinter();
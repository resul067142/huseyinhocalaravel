<?php
error_reporting(E_ALL); // hataların gösterilmesi için
ini_set('display_errors', 'On'); // hataların gösterilmesi için

include './oop/Interfaces/Loggable.php';
include './oop/Models/Person.php';
include './oop/Models/Student.php';

$student = new Student('Ali', 'Kaya', 12345678910);

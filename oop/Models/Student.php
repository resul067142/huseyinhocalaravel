<?php

class Student extends Person implements Loggable {
    private $studentNumber;
    public function getInformations() {
        return $this->name . ' ' . $this->surname . ' - TC: ' .$this->tc;
    }

    public function setStudentNumber($no) {
        if (!$this->studentNumber) {
            $this->studentNumber = $no;
            echo 'Öğrenciye numara verildi';
        }
        else
            die('Zaten öğrencinin numarası var.');
    }

    public function writeLog()
    {
        echo 'Ben öğrenci loguyum..';
        // TODO: Implement writeLog() method.
    }
}
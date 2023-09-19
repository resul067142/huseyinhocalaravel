<?php

class Student extends Person implements Loggable, Printable {
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

        $file = fopen( __DIR__ . '/log.txt', 'a');
        fwrite($file, date("Y-m-d H:i:s") . ' '
            . $this->name . ' ' . $this->surname. "\n");
        fclose($file);
    }

    public function sendPrinter()
    {
        echo '<br>';
        echo $this->name . ' ' . $this->surname .
            ' TC: ' . $this->tc;
        echo '<br>';
        echo '<br>';
        foreach ($this->lessons as $l) {
            echo $l->getName() . ' Kredi: ' . $l->getCredit();
        }
    }
}
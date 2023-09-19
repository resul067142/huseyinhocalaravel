<?php


class Teacher extends Person {
    private $pbikNumber;

    public function setPbikNumber($number) {
        if (!$this->pbikNumber) {
            $this->pbikNumber = $number;
        }else {
            echo 'Önceden pbik no verildi.';
        }
    }
}
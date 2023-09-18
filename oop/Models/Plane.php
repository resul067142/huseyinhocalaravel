<?php

class Plane extends Vehicle{

    public function flying() {
        echo 'Uçuyorum... ';
        echo '<br>';
        $this->sendLocation(45, 36,
                'Uçuş Mesajı');
    }

    public function sayReady() {
        echo 'Markası ' . $this->brand . ' ve modeli ' .
            $this->model . ' olan uçak hazırdır... ';
        echo '<br>';
    }

    public function showInformation()
    {
        echo 'Ben uçağın bilgileriyim..';
        echo '<br>';
        parent::showInformation();

        echo 'Bilgilerim bu kadar..';
        echo '<br>';
    }

    protected function sendLocation($x, $y, $message) {
        echo 'Koordinatım: (' . $x . ',' . $y . ')' ;
        echo '<br>';
        echo $message;
        echo '<br>';
    }
}
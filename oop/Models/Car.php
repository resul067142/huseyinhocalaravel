<?php

class Car implements Loggable, Printable {

    public function writeLog()
    {
        echo 'Ben araba loguyum.';
        // TODO: Implement writeLog() method.
    }

    public function sendPrinter()
    {
        echo 'Arabanın özelliklerini yazıcıya gönderiyorum..';
        echo '<br>';
    }
}
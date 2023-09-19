<?php

class WarPlane extends Plane implements Loggable {

    public function throwBomb() {
        echo 'Bomba atıyorum... ';
        $this->sendLocation(46, 36,
            'Bomba Atıyorum... ');
    }

    public function showInformation()
    {
        echo 'Savaş uçağı bilgileri:';
        echo '<br>';
        parent::showInformation(); // TODO: Change the autogenerated stub
        // ekleme yapılabilir
    }

    public function writeLog()
    {
        // TODO: Implement writeLog() method.
    }
}
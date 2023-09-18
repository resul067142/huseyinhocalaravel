<?php

include '../oop/Models/Vehicle.php';
include '../oop/Models/Plane.php';
include '../oop/Models/WarPlane.php';

$vehicle = new Vehicle('Opel', 'Astra');
$vehicle->showInformation();

echo '<br>';
$plane = new Plane('Boeing', '737');
$plane->showInformation();
$plane->sayReady();
$plane->flying();

echo '<br>';
$warPlane = new WarPlane('F', '16');
$warPlane->showInformation();
$warPlane->sayReady();
$warPlane->flying();
$warPlane->throwBomb();
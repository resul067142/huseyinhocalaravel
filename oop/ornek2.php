<?php

include './Models/Phone.php';
include './Models/Application.php';

$phone1 = new Phone('Samsung', 'A34');
$application1 = new Application('Instagram', 150);
$application2 = new Application('Udemy', 200);
$application3 = new Application('Whatsapp', 170);

echo $phone1->getInformations();
$phone1->downloadApplication($application1);
$phone1->downloadApplication($application2);
$phone1->downloadApplication($application3);

$phone1->removeApplication('Udemy');

$phone1Applications = $phone1->getApplications();

echo '<h4>Uygulamalar</h4>';
showApplications($phone1Applications);


$phone2 = new Phone('iPhone', '14');
echo '<br>';
echo '<h4>Uygulamalar 2</h4>';
$phone2Applications = $phone2->getApplications();

showApplications($phone2Applications);

// @todo uygulamaların listelenmesi fonksiyon haline getirilecek
function showApplications($applications) {
    // @todo
    foreach ($applications as $application) {
        echo 'Name: ' . $application->getName() .
            ' - Size: ' . $application->getSize();
        echo '<br>';
    }
}
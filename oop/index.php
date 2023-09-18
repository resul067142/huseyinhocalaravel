<?php

include './Models/Phone.php'; // Phone sınıfını dahil et

$phone1 = new Phone('Samsung', 'A53'); // Phone sınıfından bir nesne oluşturduk.
$phone1Informations = $phone1->getInformations();  // getInformations fonksiyonunu çağırdık.
echo $phone1Informations;   //

echo '<br>';
$phone2 = new Phone('iPhone', '15');
echo $phone2->getInformations();

$phone2->downloadApplication('Instagram');
$phone2->downloadApplication('Udemy');
$phone2->downloadApplication('X');

$phone2->removeApplication('Udemy');
$phone2->removeApplication('X');

$phone2Applications = $phone2->getApplications();

//print_r($phone2Applications);
echo '<h4>Uygulamalar</h4>';

foreach ($phone2Applications as $application) {
    echo $application;
    echo '<br>';
}




echo '<br>';
//$phone3 = new Phone('Huawei', 'P40');
//print_r($phone3);



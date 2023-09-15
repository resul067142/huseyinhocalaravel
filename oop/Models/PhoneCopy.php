<?php

class PhoneCopy{
    private $brand;
    private $model;
    private $applications;

    public function __construct($brand, $model){ // kurucu fonksiyon
        $this->brand = $brand;
        $this->model = $model;
        $this->applications = [];

        echo $this->brand . ' için kurucu method çalıştı';
        echo '<br>';
    }

    public function getInformations() {
        return 'Marka: '. $this->brand . ' Model: ' . $this->model;
    }

    public function downloadApplication($applicationName) {
        //array_push($this->applications, $applicationName);
        $this->applications[] = $applicationName;
        echo '<br>';
        echo $applicationName . ' uygulaması indi.';
    }

    public function removeApplication($applicationName) {
        //if (!in_array($applicationName, $this->applications)){
            //echo $applicationName .' uygulaması bulunamadı.';
        //}

        $index = array_search($applicationName, $this->applications);
        if ($index !== false)
            array_splice($this->applications, $index, 1);
    }

    public function getApplications() {
        return $this->applications;
    }
}
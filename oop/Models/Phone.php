<?php
class Phone{
    private $brand;
    private $model;
    private $applications;
    private $defaultApplications;

    public function __construct($brand, $model){ // kurucu fonksiyon
        $this->brand = $brand;
        $this->model = $model;
        $this->applications = [];

        $this->setDefaultApplications(); // default uygularının eklenmesi

        echo $this->brand . ' için kurucu method çalıştı';
        echo '<br>';
    }

    public function getInformations() {
        return 'Marka: '. $this->brand . ' Model: ' . $this->model;
    }

    public function downloadApplication(Application $application) {
        //array_push($this->applications, $application);
        $this->applications[] = $application; // array push (diziye eleman ekleme)
        echo '<br>';
        echo $application->getName() . ' uygulaması indi.';
    }

    public function removeApplication($applicationName) {
        // @todo güncellenecek ve default olarak yüklü gelen uygulamalar silinmeyecek

        //if (!in_array($applicationName, $this->applications)){
            //echo $applicationName .' uygulaması bulunamadı.';
        //}

        foreach ($this->applications as $key => $application) {
            if($application->getName() == $applicationName) {
                //sil
                echo $applicationName . ' silindi. Bu uygulamanın indexi: ' . $key;

                array_splice($this->applications, $key, 1);
            }
        }

        /*$index = array_search($applicationName, $this->applications);
        if ($index !== false)
            array_splice($this->applications, $index, 1);*/
    }

    public function getApplications() {
        return array_merge($this->defaultApplications, $this->applications);
    }

    private function setDefaultApplications() {
        $application1 = new Application('Kamera', 250);
        $application2 = new Application('Galeri', 200);

        $this->defaultApplications[] = $application1;
        $this->defaultApplications[] = $application2;
    }
}
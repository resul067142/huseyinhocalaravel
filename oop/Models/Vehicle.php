<?php

abstract class Vehicle{
    protected $brand;

    protected $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function showInformation() {
        echo 'Marka: ' . $this->brand . ' Model: ' . $this->model;
        echo '<br>';
    }

    public abstract function moving();
}
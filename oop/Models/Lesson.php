<?php

class Lesson {
    private $name;
    private $credit;

    public function __construct($name, $credit)
    {
        $this->name = $name;
        $this->credit = $credit;
    }

    public function getName() {
        return $this->name;
    }
}
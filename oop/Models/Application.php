<?php
class Application {
    private $name;
    private $size;

    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }
    public function getName() {
        return $this->name;
    }
    public function getSize() {
        return $this->size;
    }
}
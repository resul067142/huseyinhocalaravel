<?php

abstract class Person {
    protected $name;
    protected $surname;
    protected $tc;
    protected $lessons = [];

    public function __construct($name, $surname, $tc)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->tc = $tc;
    }

    public function addLesson($lesson) {
        $this->lessons[] = $lesson;
    }

    public function getLessons() {
        return $this->lessons;
    }
}
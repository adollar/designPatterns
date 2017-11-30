<?php

    namespace PatternPractice\Behavioral\Iterator;


    abstract class Human
    {
        private $name;
        private $male;

        public function __construct($name, $male) {
            $this->name = $name;
            $this->male = $male;
        }

        public function getName() {
            return $this->name;
        }
    }
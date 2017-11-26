<?php

    namespace PatternPractice\Structural\Decorator;


    class File
    {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }
<?php

    namespace PatternPractice\Behavioral\Memento;


    class State
    {
        /** @var string $name */
        private $name;

        public function __construct($string) {
            $this->name = $string;
        }

        public function getName() {
            return $this->name;
        }
    }
<?php

    namespace PatternPractice\Behavioral\Command;


    class Healing extends Command
    {
        public function __construct() {
            $this->name = 'HEALING';
        }

        public function execute() {
            return $this->name;
        }
    }
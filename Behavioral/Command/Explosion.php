<?php

    namespace PatternPractice\Behavioral\Command;


    class Explosion extends Command
    {

        public function __construct() {
            $this->name = 'EXPLOSTION';
        }

        public function execute() {
            return $this->name;
        }
    }
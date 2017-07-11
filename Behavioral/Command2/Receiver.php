<?php

    namespace PatternPractice\Behavioral\Command2;


    class Receiver {
        public $act = null;

        public function command() {
            return true;
        }
    }
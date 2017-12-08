<?php

    namespace PatternPractice\Behavioral\State;


    class Initialize implements State
    {
        public function execute() {
            return 'initializing';
        }
    }
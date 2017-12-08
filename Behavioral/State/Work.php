<?php

    namespace PatternPractice\Behavioral\State;


    class Work implements State
    {
        public function execute() {
            return 'working';
        }
    }
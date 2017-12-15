<?php

    namespace PatternPractice\Structural\Adapter;


    class Car implements Runnable
    {
        public function run() {
            return 'run';
        }
    }
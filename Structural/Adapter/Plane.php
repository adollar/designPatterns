<?php

    namespace PatternPractice\Structural\Adapter;


    class Plane implements Flyable
    {
        public function fly() {
            return 'fly';
        }
    }
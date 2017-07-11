<?php

    namespace PatternPractice\Structural\Decorator2;


    abstract class Shape {
        public $height;
        public $width;

        public function getHeight() {
            return $this->height;
        }

        public function getWidth() {
            return $this->width;
        }

        public abstract function calc();
    }
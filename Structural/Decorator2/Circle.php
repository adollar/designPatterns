<?php

    namespace PatternPractice\Structural\Decorator2;


    class Circle extends Shape {

        public function __construct( $width, $height ) {
            $this->width  = $width;
            $this->height = $height;
        }

        public function calc() {
            //multiply
            return $this->height * $this->width;
        }
    }
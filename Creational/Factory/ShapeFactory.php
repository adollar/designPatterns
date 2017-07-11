<?php

    namespace PatternPractice\Creational\Factory;


    class ShapeFactory {

        public static function build( $shape ) {
            if ($shape == 'circle') {
                return new Circle();
            }

            if ($shape == 'square') {
                return new Square();
            }

            return null;
        }
    }
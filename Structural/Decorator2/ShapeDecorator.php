<?php

    namespace PatternPractice\Structural\Decorator2;


    abstract class ShapeDecorator {
        protected $shape;

        public function __construct( Shape $shape ) {
            $this->shape = $shape;
        }

        public function getShape() {
            return $this->shape;
        }
    }
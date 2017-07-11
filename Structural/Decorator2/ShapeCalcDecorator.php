<?php

    namespace PatternPractice\Structural\Decorator2;


    class ShapeCalcDecorator extends ShapeDecorator {
        public function draw() {
            //add
            return $this->shape->getWidth() + $this->shape->getHeight();
        }

    }
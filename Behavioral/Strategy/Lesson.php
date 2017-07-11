<?php
    namespace PatternPractice\Behavioral\Strategy;

    class Lesson {
        private $duration;
        private $costStrategy;

        function __construct($duration, CostStrategy $strategy) {
           $this->duration = $duration;
           $this->costStrategy = $strategy;
        }

        function cost() {
            return $this->costStrategy->cost($this);
        }

        function chargeType() {
            return $this->costStrategy->chargeType();
        }

        function getDuration() {
            $this->duration;
        }

        //Other methods
    }
<?php

    namespace PatternPractice\Behavioral\Strategy;



    class FixedCostStrategy extends CostStrategy {

        function cost(Lesson $lesson) {
            return 30;
        }

        function chargeType() {
            return 'Фиксированная ставка';
        }
    }
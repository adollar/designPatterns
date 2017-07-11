<?php

    namespace PatternPractice\Behavioral\Strategy;

    /**
     * Делегат класса Lesson(выполняет что-то вместо него)
     *
     * Class CostStrategy
     * @package Strategy
     */
    abstract class CostStrategy {
        abstract function cost(Lesson $lesson);
        abstract function chargeType();
    }
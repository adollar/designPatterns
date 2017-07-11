<?php

    namespace PatternPractice\Behavioral\Strategy\Tests;


    use PatternPractice\Behavioral\Strategy\FixedCostStrategy;
    use PatternPractice\Behavioral\Strategy\Lecture;
    use PatternPractice\Behavioral\Strategy\Seminar;
    use PatternPractice\Behavioral\Strategy\TimedCostStrategy;

    class StrategyTest extends \PHPUnit_Framework_TestCase {

        public function testDifferentStrategies() {

            $lessons[] = new Seminar(4, new TimedCostStrategy());
            $lessons[] = new Lecture(4, new FixedCostStrategy());

            foreach ($lessons as $lesson) {
                print("Плата за занятие: {$lesson->cost()}. ");
                print("Тип оплаты {$lesson->chargeType()}\n");
            }
            

        }
    }
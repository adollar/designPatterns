<?php

    namespace PatternPractice\Behavioral\Memento\Tests;


    use PatternPractice\Behavioral\Memento\TimeMachine;

    class MementoTest extends \PHPUnit_Framework_TestCase
    {
        public function testTimeMachine() {
            $timeMachine = new TimeMachine();

            $memento = $timeMachine->save();
            $this->assertSame($timeMachine->getState(), 'now');

            $timeMachine->toFeauture();
            $this->assertSame($timeMachine->getState(), 'feauture');

            $timeMachine->goBack($memento);
            $this->assertSame($timeMachine->getState(), 'now');
        }
    }

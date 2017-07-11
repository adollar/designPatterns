<?php

    namespace PatternPractice\Creational\Builder\Test;

    use PatternPractice\Creational\Builder\Director;
    use PatternPractice\Creational\Builder\MacBuilder;

    class TestBuilder extends \PHPUnit_Framework_TestCase {
        /** @var Director */
        public $director;
        /** @var  MacBuilder */
        public $macBuilder;

        protected function setUp() {
            echo __METHOD__.PHP_EOL;
            $this->director   = new Director();
            $this->macBuilder = new MacBuilder();
        }

        function testBuilder() {
            $this->director->setComputerBuilder($this->macBuilder);
            $this->director->constructComputer();
            $computer = $this->director->getComputer();
        }
    }

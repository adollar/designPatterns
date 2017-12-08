<?php

    namespace PatternPractice\Behavioral\State\Tests;


    use PatternPractice\Behavioral\State\Initialize;
    use PatternPractice\Behavioral\State\Runner;
    use PatternPractice\Behavioral\State\Work;

    class StateTest extends \PHPUnit_Framework_TestCase
    {
        public function testRunner() {
            $runner = new Runner();

            $runner->setState(new Initialize());
            $this->assertSame('initializing', $runner->execute());

            $runner->setState(new Work());
            $this->assertSame('working', $runner->execute());
        }
    }

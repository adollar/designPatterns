<?php

    namespace PatternPractice\Behavioral\Command2\Test;

    use PatternPractice\Behavioral\Command2\ConcreteCommand;
    use PatternPractice\Behavioral\Command2\Invoker;
    use PatternPractice\Behavioral\Command2\Receiver;

    class TestClient extends \PHPUnit_Framework_TestCase {
        /** @var  Invoker */
        public $invoker;
        /** @var  Receiver */
        public $receiver;

        public function setUp() {
            $this->invoker  = new Invoker();
            $this->receiver = new Receiver();
        }

        public function test() {
            $command = new ConcreteCommand($this->receiver);
            $this->invoker->setCommand($command);
            $this->invoker->execute();
        }
    }

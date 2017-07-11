<?php

    namespace PatternPractice\Behavioral\Command2;


    class ConcreteCommand implements CommandInterface {
        /** @var Receiver */
        private $receiver = null;

        public function __construct( Receiver $receiver ) {
            $this->receiver = $receiver;
        }

        public function execute() {
            $this->receiver->command();
        }
    }
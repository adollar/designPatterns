<?php

    namespace PatternPractice\Behavioral\Command2;


    class Invoker {
        /** @var  CommandInterface */
        private $command;

        public function setCommand(CommandInterface $command ) {
            $this->command = $command;
        }

        public function execute() {
            $this->command->execute();
        }

    }
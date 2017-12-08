<?php

    namespace PatternPractice\Behavioral\State;


    class Runner
    {
        /** @var State $state */
        private $state;

        public function __construct() {
        }

        public function setState(State $state) {
            $this->state = $state;
        }

        public function execute() {
            return $this->state->execute();
        }
    }
<?php

    namespace PatternPractice\Behavioral\Memento;


    class TimeMachine
    {
        /** @var State $state */
        private $state;

        public function __construct() {
            $this->state = new State('now');
        }

        public function save() {
            return new Memento($this->state);
        }

        public function getState() {
            return $this->state->getName();
        }

        public function toFeauture() {
            $this->state = new State('feauture');
        }

        public function goBack(Memento $memento) {
            $this->state = $memento->getState();
        }
    }
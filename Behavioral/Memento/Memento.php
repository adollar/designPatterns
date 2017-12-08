<?php

    namespace PatternPractice\Behavioral\Memento;


    class Memento
    {
        /** @var State $state */
        private $state;

        public function __construct(State $state) {
            $this->state = $state;
        }

        public function getState() {
            return $this->state;
        }
    }
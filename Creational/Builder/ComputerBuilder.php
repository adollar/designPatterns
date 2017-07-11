<?php

    namespace PatternPractice\Creational\Builder;


    abstract class ComputerBuilder {
        /** @var  Computer */
        public $computer;

        public function getComputer() {
            return $this->computer;
        }

        public function createNewComputer() {
            $this->computer = new Computer();
        }

        public abstract function buildDisplay();

        public abstract function buildSystemBlock();

        public abstract function buildManipulator();
    }
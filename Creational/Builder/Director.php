<?php

    namespace PatternPractice\Creational\Builder;


    class Director {
        /** @var  ComputerBuilder */
        public $computerBuilder;

        public function setComputerBuilder( ComputerBuilder $computerBuilder ) {
            $this->computerBuilder = $computerBuilder;
        }

        public function getComputer() {
            return $this->computerBuilder->getComputer();
        }

        public function constructComputer() {
            $this->computerBuilder->createNewComputer();
            $this->computerBuilder->buildDisplay();
            $this->computerBuilder->buildManipulator();
            $this->computerBuilder->buildSystemBlock();
        }
    }
<?php

    namespace PatternPractice\Creational\Builder;


    class MacBuilder extends ComputerBuilder {

        public function buildDisplay() {
            $this->computer->setDisplay('Display'); 
        }

        public function buildSystemBlock() {
            $this->computer->setSystemBlock('System Block');
        }

        public function buildManipulator() {
            $this->computer->setManipulator('Mouse');
        }
    }
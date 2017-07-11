<?php

    namespace PatternPractice\Creational\Builder;


    class Computer {
        private $display = null;
        private $systemBlock = null;
        private $manipulator = null;

        public function setDisplay( $display ) {
            $this->display = $display;
        }

        public function setSystemBlock( $systemBlock ) {
            $this->systemBlock = $systemBlock;
        }

        public function setManipulator( $mouse ) {
            $this->manipulator = $mouse;
        }
    }
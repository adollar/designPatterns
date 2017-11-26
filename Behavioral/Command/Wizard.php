<?php

    namespace PatternPractice\Behavioral\Command;

    /** Invoker */
    class Wizard
    {
        private $castedSpells = [];

        /**
         * Wizard constructor.
         */
        public function __construct() {
        }

        public function castSpell(Command $command) {
            $command->execute();
            $this->castedSpells[] = $command;
        }

        public function getCastedSpells() {
            return $this->castedSpells;
        }
    }
<?php

    namespace PatternPractice\Structural\Composite;


    class Army extends Unit {

        private $units = [];

        function addUnit( Unit $unit ) {
            if (in_array($unit, $this->units, true)) {
                return;
            }

            $this->units[] = $unit;
        }

        function removeUnit( Unit $unit ) {
            $this->units = array_udiff($this->units,
                [$unit],
                function ( $a, $b ) {
                    return ( $a === $b ) ? 0 : 1;
                });
        }

        function bombardStrength() {
            $ret = 0;
            foreach ($this->units as $unit) {
                $ret += $unit->bombardStrength();
            }

            return $ret;
        }
    }
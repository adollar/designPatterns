<?php

    namespace PatternPractice\Structural\Decorator;


    class Plains extends Tile {
        private $wealthFactory = 2;

        function getWealthFactor() {
            return $this->wealthFactory;
        }
    }
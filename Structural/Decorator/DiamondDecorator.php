<?php

    namespace PatternPractice\Structural\Decorator;


    class DiamondDecorator extends TileDecorator {

        function getWealthFactor() {
            return $this->tile->getWealthFactor() + 2;
        }
    }
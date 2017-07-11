<?php

    namespace PatternPractice\Structural\Decorator;


    class PollutionDecorator extends TileDecorator {

        function getWealthFactor() {
            return $this->tile->getWealthFactor() - 4;
        }
    }
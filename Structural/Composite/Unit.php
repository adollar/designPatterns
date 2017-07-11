<?php

    namespace PatternPractice\Structural\Composite;


    abstract class Unit {

        function addUnit( Unit $unit ) {
            throw new UnitException(get_class().' is leaf');
        }

        function removeUnit( Unit $unit ) {
            throw new UnitException(get_class().' is leaf');
        }

        abstract function bombardStrength();

    }
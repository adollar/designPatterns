<?php

    namespace PatternPractice\Structural\Decorator;


    abstract class TileDecorator extends Tile {
        protected $tile;

        function __construct(Tile $tile) {
           $this->tile = $tile;
        }
    }
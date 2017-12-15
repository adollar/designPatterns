<?php

    namespace PatternPractice\Structural\Adapter;


    class PlaneAdapter
    {
        /**
         * @var Flyable $plane
         */
        private $plane;

        public function __construct(Flyable $plane) {
            $this->plane = $plane;
        }

        public function run() {
            return $this->plane->fly();
        }
    }
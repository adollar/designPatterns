<?php

    namespace PatternPractice\Structural\Decorator;


    class CachedFile
    {
        /** @var File $original */
        private $original;

        public function __construct($file) {
            $this->original = $file;
        }

        public function getName() {
            return $this->original->getName().'_cached';
        }
    }
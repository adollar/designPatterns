<?php

    namespace PatternPractice\Structural\Decorator\Test;


    use PatternPractice\Structural\Decorator\File;

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
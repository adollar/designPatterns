<?php

    namespace PatternPractice\Behavioral\Command;


    abstract class Command
    {

        protected $name = 'EXPLOSION';

        abstract public function execute();
        
    }
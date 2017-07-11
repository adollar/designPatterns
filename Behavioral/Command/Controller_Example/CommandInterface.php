<?php

    namespace PatternPractice\Behavioral\Command\Controller_Example;


    interface CommandInterface {
        public function execute(CommandContext $context);
    }
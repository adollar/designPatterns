<?php

    namespace PatternPractice\Behavioral\Command\Controller_Example\Commands;


    use PatternPractice\Behavioral\Command\Controller_Example\CommandContext;
    use PatternPractice\Behavioral\Command\Controller_Example\CommandInterface;

    class HelloCommand implements CommandInterface {

        public function execute(CommandContext $context) {
            //$email = $context->get('email');
            //$result = ($email)? $email: $context->setError('email wasn\'t found');
        }
    }
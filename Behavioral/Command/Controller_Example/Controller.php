<?php

    namespace PatternPractice\Behavioral\Command\Controller_Example;


    class Controller {
        private $context;

        function __construct() {
            $this->context = new CommandContext();
        }

        function getContext() {
            return $this->context;
        }

        function proccess() {
            $action = $this->context->get('action');
            $action = ( is_null($action) ) ? 'default' : $action;
            $cmd    = CommandFactory::getCommand($action);
            if(!$cmd->execute($this->context)) {
                echo 'error';
            } else {
                echo 'good';
            }
        }
    }
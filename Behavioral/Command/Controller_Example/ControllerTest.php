<?php

    namespace PatternPractice\Behavioral\Command\Controller_Example;

    class ControllerTest extends \PHPUnit_Framework_TestCase {
        function testController() {
            $controller = new Controller();
            $context = $controller->getContext();
            $context->addParam('action', 'hello');
            $context->addParam('username', 'bob');
            $context->addParam('pass', 'mysuperpass');
            $controller->proccess();
        }
    }
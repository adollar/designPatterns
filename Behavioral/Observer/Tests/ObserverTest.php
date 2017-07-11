<?php

    namespace PatternPractice\Behavioral\Observer\Tests;


    use PatternPractice\Behavioral\Observer\Login;
    use PatternPractice\Behavioral\Observer\SecurityMonitor;

    class ObserverTest extends \PHPUnit_Framework_TestCase {
        function testObserver() {
            $login = new Login();
            $login->attach(new SecurityMonitor());
            $login->getStatus();
        }
    }
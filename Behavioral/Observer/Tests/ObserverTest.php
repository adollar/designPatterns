<?php

    namespace PatternPractice\Behavioral\Observer\Tests;


    use PatternPractice\Behavioral\Observer\LogObserver;
    use PatternPractice\Behavioral\Observer\User;
    use PatternPractice\Behavioral\Observer\UserDisplayObserver;

    class ObserverTest extends \PHPUnit_Framework_TestCase
    {
        public function testObserversUpdatedAfterSubjectChanged() {
            $user = new User('Nikolay');

            $loggingObserver     = new LogObserver();
            $userDisplayObserver = new UserDisplayObserver();

            $user->attach($loggingObserver);
            $user->attach($userDisplayObserver);

            $user->setName('Terminator');

            $this->assertCount(1, $loggingObserver->getUpdatedUsers());
            $this->assertEquals($userDisplayObserver->getUsername(), 'Terminator');

            $user->detach($userDisplayObserver);
            $this->assertCount(1, $user->getObservers());

            $user->setName('Nino');
            $this->assertEquals($userDisplayObserver->getUsername(), 'Terminator');
        }
    }

<?php

    namespace PatternPractice\Behavioral\Observer;


    use SplObserver;
    use SplSubject;

    class LogObserver implements SplObserver
    {
        private $updatedUsers = [];

        public function update(SplSubject $subject) {
            $this->updatedUsers[] = $subject;
        }

        public function getUpdatedUsers() {
            return $this->updatedUsers;
        }
    }
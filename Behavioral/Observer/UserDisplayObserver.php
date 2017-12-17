<?php

    namespace PatternPractice\Behavioral\Observer;


    use SplObserver;
    use SplSubject;

    class UserDisplayObserver implements SplObserver
    {
        /** @var User */
        private $user;

        public function update(SplSubject $subject) {
            //без clone будет передаваться ссылка на существующий объект
            $this->user = clone $subject;
        }

        public function getUsername() {
            return $this->user->getName();
        }
    }
<?php

    namespace PatternPractice\Behavioral\Observer;


    use SplObjectStorage;
    use SplObserver;
    use SplSubject;

    class User implements SplSubject
    {
        /** @var string */
        private $username;

        /** @var SplObjectStorage */
        private $observers;

        public function setName($newName) {
            $this->username = $newName;
            $this->notify();
        }

        public function getName() {
            return $this->username;
        }

        public function __construct($username) {
            $this->username  = $username;
            $this->observers = new SplObjectStorage();
        }

        public function attach(SplObserver $observer) {
            $this->observers->attach($observer);
        }

        public function detach(SplObserver $observer) {
            $this->observers->detach($observer);
        }

        public function notify() {
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }
        }

        public function getObservers() {
            return $this->observers;
        }
    }
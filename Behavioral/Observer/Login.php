<?php

    namespace PatternPractice\Behavioral\Observer;


    use phpDocumentor\Reflection\Types\This;

    class Login implements Observable {

        private $observers = [];
        private $status = [];
        private $storage;

        const LOGIN_USER_UNKNOWN = 1;
        const LOGIN_WRONG_PASS   = 2;
        const LOGIN_ACCESS       = 3;

        function __construct() {
            $this->observers = [];
            $this->status = self::LOGIN_USER_UNKNOWN;
        }

        /**
         * Notify observers
         */
        function handleLogin() {
            $this->notify();
        }

        function attach( Observer $observer ) {
            $this->observers[] = $observer;
        }

        function detach( Observer $observer ) {
            $this->observers = array_filter($this->observers,
                function ( $a ) use ( $observer ) {
                    return ( !( $a === $observer ) );
                });
        }

        function notify() {
            foreach ($this->observers as $observer) {
                $observer->update();
            }
        }

        function getStatus() {
            return $this->status;
        }
    }
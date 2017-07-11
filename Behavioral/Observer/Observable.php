<?php

    namespace PatternPractice\Behavioral\Observer;


    interface Observable {
        function attach(Observer $observer);
        function detach(Observer $observer);
        function notify();
    }
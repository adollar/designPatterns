<?php

    namespace PatternPractice\Behavioral\Observer;


    class SecurityMonitor implements Observer {

        function update( Observable $observable ) {
            print __CLASS__.": send letter to sysadmin";
        }
    }
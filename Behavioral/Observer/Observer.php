<?php

    namespace PatternPractice\Behavioral\Observer;


    interface Observer {
        function update( Observable $observable );
    }
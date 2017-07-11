<?php

    namespace PatternPractice\Behavioral\Visitor;


    interface Visitable {
        public function accept( Visitor $visitor );
    }
<?php
    /**
     * Created by PhpStorm.
     * User: hpkns
     * Date: 04.07.17
     * Time: 8:51 PM
     */

    namespace PatternPractice\Behavioral\Visitor;


    interface Visitor {
        public function visit( Book $book );
    }
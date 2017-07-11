<?php

    namespace PatternPractice\Behavioral\Visitor;


    class PostageVisitor implements Visitor {
        public $totalPrice = null;

        public function getTotalPrice() {
            return $this->totalPrice;
        }

        public function visit( Book $book ) {
            if ($book->getPrice() < 1000) {
                $this->totalPrice += $book->getPrice();
            }
        }
        
        /**
         * public function visit(AnotherObject $obj) {
         *  ....
         * }
         */
    }
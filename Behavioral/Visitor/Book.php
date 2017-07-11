<?php

    namespace PatternPractice\Behavioral\Visitor;


    class Book implements Visitable {
        private $price;
        private $weight;

        public function __construct( $price ) {
            $this->price = $price;
        }

        public function accept( Visitor $visitor ) {
            $visitor->visit($this);
        }

        public function getPrice() {
            return $this->price;
        }

        public function getWeight() {
            return $this->weight;
        }
    }
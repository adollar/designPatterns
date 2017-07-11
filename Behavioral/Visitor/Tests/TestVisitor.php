<?php

    namespace PatternPractice\Behavioral\Tests\Visitor;


    use PatternPractice\Behavioral\Visitor\Book;
    use PatternPractice\Behavioral\Visitor\PostageVisitor;

    class TestVisitor extends \PHPUnit_Framework_TestCase {
        public $books = [];

        /** @var PostageVisitor $postageVisitor */
        public $postageVisitor = null;

        protected function setUp() {
            $this->postageVisitor = new PostageVisitor();

            for ($i = 0; $i < 3; $i++) {
                $book            = new Book($i + 10);
                $this->books[$i] = $book;
            }
        }

        public function testVisitor() {
            foreach ($this->books as $key => $item) {
                $item->accept($this->postageVisitor);
            }
            $price = $this->postageVisitor->getTotalPrice();

            $this->assertEquals(33, $price);

        }
    }

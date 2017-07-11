<?php

    namespace PatternPractice\Structural\Decorator2\Tests;


    use PatternPractice\Structural\Decorator2\Circle;
    use PatternPractice\Structural\Decorator2\ShapeCalcDecorator;

    class TestDecorator2 extends \PHPUnit_Framework_TestCase {

        public function testDecorator() {
            $shape             = new Circle(3, 2);
            $redShapeDecorator = new ShapeCalcDecorator($shape);

            $this->assertEquals(6, $shape->calc());
            $this->assertEquals(5, $redShapeDecorator->draw());
        }
    }

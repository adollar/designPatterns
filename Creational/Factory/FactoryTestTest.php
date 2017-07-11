<?php
    /**
     * Created by PhpStorm.
     * User: hpkns
     * Date: 03.07.17
     * Time: 9:04 PM
     */

    namespace PatternPractice\Creational\Factory;


    class FactoryTestTest extends \PHPUnit_Framework_TestCase {

        public function test() {
            $shape = ShapeFactory::build('circle');
            $this->assertSame('circle', $shape->draw());
        }
    }

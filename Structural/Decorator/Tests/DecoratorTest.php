<?php

    namespace PatternPractice\Structural\Decorator\Tests;


    use PatternPractice\Structural\Decorator\DiamondDecorator;
    use PatternPractice\Structural\Decorator\Plains;
    use PatternPractice\Structural\Decorator\PollutionDecorator;

    class DecoratorTest extends \PHPUnit_Framework_TestCase {

        public function testDecorator() {
            $tile = new Plains();
            $this->assertEquals(2, $tile->getWealthFactor());

            $diamondsTile = new DiamondDecorator(new Plains());
            $this->assertEquals(4, $diamondsTile->getWealthFactor());

            $pollutedTile = new PollutionDecorator(new DiamondDecorator(new Plains()));
            $this->assertEquals(0, $pollutedTile->getWealthFactor());

        }


    }
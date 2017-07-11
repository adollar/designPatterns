<?php
    namespace PatternPractice\Structural\Tests;

    use PatternPractice\Structural\Composite\Archer;
    use PatternPractice\Structural\Composite\Army;
    use PatternPractice\Structural\Composite\LaserCannonUnit;

    class CompositeTest extends \PHPUnit_Framework_TestCase {

        function testUnits() {
            $main_army = new Army();
            $main_army->addUnit(new Archer());
            $main_army->addUnit(new LaserCannonUnit());

            $another_army = new Army();
            $another_army->addUnit(new Archer());
            $another_army->addUnit(new Archer());
            $another_army->addUnit(new Archer());

            $main_army->addUnit($another_army);

            $this->assertEquals(36, $main_army->bombardStrength());
        }

    }
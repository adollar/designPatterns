<?php

    namespace PatternPractice\Structural\Adapter\Tests;


    use PatternPractice\Structural\Adapter\Car;
    use PatternPractice\Structural\Adapter\Plane;
    use PatternPractice\Structural\Adapter\PlaneAdapter;

    class Test extends \PHPUnit_Framework_TestCase
    {
        public function test() {
            $car   = new Car();
            $plane = new Plane();

            $planeAdapter = new PlaneAdapter($plane);

            $this->assertSame($car->run(), 'run');
            $this->assertSame($planeAdapter->run(), 'fly');
        }
    }

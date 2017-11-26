<?php

    namespace PatternPractice\Behavioral\Command\Tests;


    use PatternPractice\Behavioral\Command\Explosion;
    use PatternPractice\Behavioral\Command\Healing;
    use PatternPractice\Behavioral\Command\Wizard;

    class CommandTest extends \PHPUnit_Framework_TestCase
    {
        public function test() {
            $wizard = new Wizard();

            $this->assertEquals(0, count($wizard->getCastedSpells())); 

            $wizard->castSpell(new Healing());
            $this->assertEquals(1, count($wizard->getCastedSpells()));

            $wizard->castSpell(new Explosion());
            $this->assertEquals(2, count($wizard->getCastedSpells()));
        }
    }

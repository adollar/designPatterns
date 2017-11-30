<?php

    namespace PatternPractice\Behavioral\Iterator\Tests;


    use PatternPractice\Behavioral\Iterator\Group;
    use PatternPractice\Behavioral\Iterator\Man;
    use PatternPractice\Behavioral\Iterator\Woman;

    class GroupTest extends \PHPUnit_Framework_TestCase
    {
        public function test() {
            $group = new Group();
            $group->add(new Man("Vladimir", true));
            $group->add(new Woman("Natasha", false));
            $group->add(new Man("Dmitry", true));

            $names = [];
            foreach ($group as $human) {
                $names[] = $human->getName();
            }

            $this->assertEquals([
                "Vladimir",
                "Natasha",
                "Dmitry",
            ],
                $names);

            $this->assertEquals(3, count($group));

            $group->remove("Vladimir");
            $this->assertEquals(2, count($group));
        }
    }

<?php

    namespace PatternPractice\Structural\Decorator\Test;


    use PatternPractice\Structural\Decorator\CachedFile;
    use PatternPractice\Structural\Decorator\File;

    class DecoratorTest extends \PHPUnit_Framework_TestCase
    {
        public function test() {
            $file = new File('file');
            $this->assertEquals('file', $file->getName());
            $fileDecorator = new CachedFile($file);
            $this->assertEquals('file_cached', $fileDecorator->getName());
        }
    }

<?php

    namespace PatternPractice\Behavioral\Command\Controller_Example;


    class CommandFactory {
        private static $dir = 'Commands';

        static function getCommand( $action = 'Default' ) {
            if (preg_match('/\W/', $action)) {
                throw new \Exception('Incorrect symbols');
            }
            $class = ucfirst(strtolower($action)).'Command';
            $file  = self::$dir.DIRECTORY_SEPARATOR."{$class}.php";
            if (!file_exists($file)) {
                throw new CommandNotFoundException("File '{$class}' was not found");
            }

            require_once( $file );

            if (!class_exists($file)) {
                throw new CommandNotFoundException("Class '{$file}' was not found");
            }

            $cmd = new $class();

            return $cmd;
        }
    }
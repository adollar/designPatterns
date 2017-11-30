<?php

    namespace PatternPractice\Behavioral\Iterator;


    use Countable;
    use Exception;
    use Iterator;

    class Group implements Iterator, Countable
    {
        private $group = [];
        private $currentIndex;


        public function remove($name) {
            if (empty($this->group)) {
                throw new Exception('Group is empty');
            }

            foreach ($this->group as $key => $single) {
                if ($single->getName() == $name) {
                    unset($this->group[$key]);
                }
            }
        }

        public function add(Human $human) {
            $this->group[] = $human;
        }

        public function current() {
            return $this->group[$this->currentIndex];
        }

        public function next() {
            $this->currentIndex++;
        }

        public function key() {
            return $this->current();
        }

        public function valid() {
            return isset($this->group[$this->currentIndex]);
        }

        public function rewind() {
            $this->currentIndex = 0;
        }

        public function count() {
            return count($this->group);
        }
    }
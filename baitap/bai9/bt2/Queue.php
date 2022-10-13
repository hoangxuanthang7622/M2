<?php
    class Queue
    {
        private $font = null;
        private $back = null;
    
        public function isEmpty()
        {
            return is_null($this->font);
        }
        
        public function enqueue($value)
        {
            $oldBack = $this->back;
            $this->back = new Node(2);
            $this->back->value = $value;
            if ($this->isEmpty()) {
                $this->font = $this->back;
            } else {
                $oldBack->next = $this->back;
            }
        }
    
        public function dequeue()
        {
            if ($this->isEmpty()) {
                return null;
            }
            $removedValue = $this->font->value;
            $this->font = $this->font->next;
            return $removedValue;
        }
    }
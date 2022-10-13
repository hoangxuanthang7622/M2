<?php


class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }
    public function insertFirst($data): void
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if (is_null($this->lastNode)){
            $this->lastNode = $node;
        }

        $this->count++;
    }
}

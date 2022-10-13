<?php

    class Node{
        public $data;
        public $next = null;
        public function __construct($ts_data)
        {
            $this->data = $ts_data;
        }
    }

    class Linkedlish {
        public $firstNode = null;
        public function insert($elm){
            //$elm: 't.tâm'
            $node = new Node($elm);
            // echo '<pre>';
            // print_r($node);
            // die();
            if($this->firstNode == null){
                $this->firstNode = $node;

            }else{
                $currenNode = $this->firstNode;

                while($currenNode->next != null){
                    $currenNode = $currenNode->next;
                }
                $currenNode->next = $node;
            }
        }
    }

    $objLinkedlish = new Linkedlish();
    $objLinkedlish->insert('th.tâm');
    $objLinkedlish->insert('b.thắng');
    $objLinkedlish->insert('nhân');
    $objLinkedlish->insert('p.tâm');
    $objLinkedlish->insert('h.thắng');
    echo '<pre>';
    print_r($objLinkedlish);
    die();
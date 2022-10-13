<?php
    class Dancer {
        public $name;
        public $gender;
        public function __construct($ts_name,$ts_gender)
        {
            $this->name = $ts_name;
            $this->gender = $ts_gender;
        }


    }
    $maleQueue = new SplQueue();
    $maleQueue->enqueue(new Dancer('b.thắng','male'));
    $maleQueue->enqueue(new Dancer('nhân','male'));
    $maleQueue->enqueue(new Dancer('linh','male'));
    $maleQueue->enqueue(new Dancer('x.thắng','male'));
    $maleQueue->enqueue(new Dancer('p.tâm','male'));

    $femaleQueue = new SplQueue();
    $femaleQueue->enqueue(new Dancer('duy','female'));
    $femaleQueue->enqueue(new Dancer('huyền','female'));
    $femaleQueue->enqueue(new Dancer('t.tâm','female'));
    $femaleQueue->enqueue(new Dancer('p.thảo','female'));

    $maleQueue->rewind();
    $femaleQueue->rewind();
    $pairs = [];
    $male_waitting = [];
    $female_waitting = [];
    while($maleQueue->valid() || $femaleQueue->valid()){
        if($maleQueue->valid() && $femaleQueue->valid()){
            $pairs[] = [
                'male' => $maleQueue->current(),
                'female' => $femaleQueue->current(),
            ];
            $maleQueue->next();
            $femaleQueue->next();
        }elseif(!$femaleQueue->valid()){
            $male_waitting[] = $maleQueue->current();
            $maleQueue->next();
        }
        elseif(!$maleQueue->valid()){
            $female_waitting[] = $femaleQueue->current();
            $femaleQueue->next();
        }
    }

    echo '<pre>';
    print_r($pairs);
    print_r($female_waitting);
    print_r($male_waitting);
    die();

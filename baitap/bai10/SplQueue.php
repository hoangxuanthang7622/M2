<?php
    //FIFO
    $objSplQueue = new SplQueue();
    $objSplQueue->enqueue('t.tâm');
    $objSplQueue->enqueue('b.thắng');
    $objSplQueue->enqueue('nhân');
    $objSplQueue->enqueue('x.thắng');
    $objSplQueue->enqueue('p.tâm');
     //đưa con trỏ về vị trí đầu
     $objSplQueue->rewind();
     //lấy phần tử ra
     while($objSplQueue->valid()){
         echo '<br>' . $objSplQueue->current();
         $objSplQueue->next();
     }

    echo '<pre>';
    print_r($objSplQueue);
    die();
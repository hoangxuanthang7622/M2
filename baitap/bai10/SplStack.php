<?php
    //LIFO: last in first out
    $objSplStack = new SplStack();
    //thêm các phần tử vào danh sách
    $objSplStack->push('t.tâm');
    $objSplStack->push('b.thắng');
    $objSplStack->push('p.tâm');
    $objSplStack->push('nhân');
    $objSplStack->push('thắng');
    $objSplStack->add(3,'cường');
    //đưa con trỏ về vị trí đầu
    $objSplStack->rewind();
    //lấy phần tử ra
    while($objSplStack->valid()){
        echo '<br>' . $objSplStack->current();
        $objSplStack->next();
    }
    echo $objSplStack->current(); $objSplStack->next();
    echo '<br>';
    echo $objSplStack->current(); $objSplStack->next();
    echo '<br>';
    echo $objSplStack->current(); $objSplStack->next();
    echo '<pre>';
    print_r($objSplStack);
    die();
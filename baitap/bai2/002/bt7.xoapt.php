    <?php
        $songuyen = [1,3,6,4,8,7,9,5];
        //           0 1 2 3 4 5 6 7
        $index_del = -1;
        $find = 9;
        for($i = 0; $i < count($songuyen); $i ++){
            if($songuyen[$i] == $find){
                $index_del = $i;
            }
        }

        unset($songuyen[$index_del]);

        echo '<pre>';
        print_r($songuyen);
        echo '</pre>';

        echo $index_del;
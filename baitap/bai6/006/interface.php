<?php
    interface Bird {
        function fly();
        function sing();
    }
    // class conmeo implements Bird {
    //     function fly(){

    //     }
    //     function sing(){

    //     }
    // }
    interface fish {
        function swimming();
    }
    interface GiaCam extends Bird {
       function gay();
        
    }
    class GaCon implements GiaCam,fish{

        function swimming(){
            echo "bơi";
        }
        function fly(){
            echo "bay";

        }
        function sing(){
            echo "hót";

        }
       function gay(){
        echo "ò ó o";
       }
    }
?>
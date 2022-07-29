<?php


include('Yasou.php');

echo('---- Animals<br>');

$yasou= new Yasou();
echo $yasou->q();

include('fiora.php');
echo('---- Animals<br>');
$fiora= new fiora();
echo $fiora->q();
echo $fiora->w();
echo $fiora->e();
echo $fiora->r();





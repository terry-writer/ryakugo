<?php

$bunsyou = 'This is a pen';
$pieces = explode(" ", $bunsyou);

$i = 0;
while(empty($pieces[$i]) === true){
    $test = substr($pieces[$i], 0, 1);
    echo $test;
    $i ++;
}


$test2 = substr($pieces[0], 0, 1);
echo $test2;



<?php
function ryakugo($bunsyou){
    $arr =[];
    $array = explode(" ", $bunsyou);
    foreach ($array as $value) {
        $arr[] = substr($value, 0, 1);
    }
    return implode($arr);
}

// $test = ryakugo('this is a pen');
// var_dump($test);



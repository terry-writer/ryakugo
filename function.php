<?php

function ryakugo($bunsyou){
    $array = explode(" ", $bunsyou);
    foreach ($array as $value) {
        $value = substr($value, 0, 1);
        print_r($value);
    }
}


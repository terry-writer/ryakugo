<?php
//test_array patern3
// $arr =[];
// function ryakugo($bunsyou){
//     $array = explode(" ", $bunsyou);
//     foreach ($array as $value) {
//         $arr[] = substr($value, 0, 1);
//     }
//     return $arr;
// }

//test1 patern1
function ryakugo($bunsyou){
    $arr =[];
    $array = explode(" ", $bunsyou);
    foreach ($array as $value) {
        $arr[] = substr($value, 0, 1);
    }
    return implode($arr);
}

$test = ryakugo('this is a pen');
var_dump($test);

// $a = array(1, 2, 3, 17);

// $i = 1; /* 説明用 */

// foreach ($a as $v) {
//     echo "\$a[$i] => $v.\n";
//     $i++;
//}






//test patern2
// function ryakugo($bunsyou){
//     $array = explode(" ", $bunsyou);
//     foreach ($array as $value) {
//         if($value !== null){
//             $value = substr($value, 0, 1);
//             $value . $value;
//         }else{
//             $value = 'null test';
//             return $value;
//         }        
//     }
// }


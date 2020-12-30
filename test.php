<?php
 require ('function.php');

 $bunsyou = 'as soon as possible';

 ryakugo($bunsyou);

 echo '<br>';

 $bunsyou = 'best friend forever';

 ryakugo($bunsyou);


 echo '<br>';

 $bunsyou = 'This is my pen';

 ryakugo($bunsyou);


 echo '<br>';

 $bunsyou = 'My name is cat';

 ryakugo($bunsyou);


 echo '<br>';

 $bunsyou = 'no music no life';

 ryakugo($bunsyou);

 echo '<br>';

 $answers = [
    "as soon as possible" => "asap",
    'best friend forever' => 'bff',
    'This is my pen' => 'Timp',
    'My name is cat' => 'Mnic',
    'no music no life' => 'nmnl',
];




// foreach ($answers as $answer => $expect) {
//     echo ' 略す前 = '.  $answer, ' 略語 = '.  ($expect ? 'true' : 'false');

//     if (ryakugo($bunsyou) === $expect) {
//         echo ' OK 一致';
//     } else {
//         echo ' NG 不一致';
//     }
//     echo '<br>', PHP_EOL;
// }
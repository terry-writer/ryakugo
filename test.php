<?php
 require ('function.php');

 if(ryakugo('as soon as possible') === 'asap'){
     echo '略語になっている';
 }else{
     echo '略語になってない';
 }

echo '<br>';

 if(ryakugo('best friend forever') === 'bff'){
    echo '略語になっている';
}else{
    echo '略語になってない';
}

echo '<br>';


if(ryakugo('This is a pen') === 'Tiap'){
    echo '略語になっている';
}else{
    echo '略語になってない';
}

echo '<br>';


if(ryakugo('My name is cat') === 'Mnic'){
    echo '略語になっている';
}else{
    echo '略語になってない';
}

echo '<br>';


if(ryakugo('oh my god') === 'omg'){
    echo '略語になっている';
}else{
    echo '略語になってない';
}

<?php
 //略語生成プログラム
function LinkingInitial($Sentence){
    //$Shortend_formとして略語を入れる空の配列を作る
    $Shortened_form =[];
    //$Sentenceをスペースで区切り、$wordsに入れる
    $words = explode(" ", $Sentence);

    //$wordsから中身を１つずつ取り出し、単語の最初の1文字を取り出して$Shortend_form[]の配列にいれる
    foreach ($words as $word) {
        $Shortened_form[] = substr($word, 0, 1);
    }

    //$Shortend_formの配列を文字列に変換する
    return implode($Shortened_form);
}





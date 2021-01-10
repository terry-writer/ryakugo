<?php
 //略語生成プログラム
function LinkingInitial($sentence){
    //$shortend_formとして略語を入れる空の配列を作る
    $shortened_form =[];
    //$sentenceをスペースで区切り、$wordsに入れる
    $words = explode(" ", $sentence);

    //$wordsから中身を１つずつ取り出し、単語の最初の1文字を取り出して$shortend_form[]の配列にいれる
    foreach ($words as $word) {
        $shortened_form[] = substr($word, 0, 1);
    }

    //$shortend_formの配列を文字列に変換
    return implode($shortened_form);
}





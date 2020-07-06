<?php 
//function.php

function getVoteCount($id){
    //カウント数を書きだしてあるファイル名
    $fileName = "log/" . $id . ".text";

    //fopenでファイルを読み込む (読み込みモード)
    $fp = @fopen($fileName , "r");

    if($fp){
        //カウント数書き込み済みのファイルの内容を取得
        $vote = fgets($fp , 9182);
    }else{
        $vote = 0;  
    }

return $vote;
}
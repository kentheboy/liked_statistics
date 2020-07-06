<?php

//vote.php

//////recieve ajax
$file_id = $_POST["file_id"]; //file name
$count = $_POST["count"]; //votes
$cookieName = "vote_" . $file_id; //Cookie name
$cookieTime = time() + 3; //Cookie expiration (second)

///////Cookie
if(isset($_COOKIE[$cookieName])){
    echo "クッキー制御により投票不可です。";

}else{
///////If within cookie expiration
    $count = $_POST["count"]; //投票数

    //カウント数を書き出すファイル名
    $fileName = "log/" . $file_id . ".text";

    $fp = @fopen($fileName , "w"); //書き込みモードで開く

    flock($fp , LOCK_EX); //排他的ロック(書く準備) 他のロックをすべてブロック
    fputs($fp , $count); //カウント数を書き込み
    flock($fp , LOCK_UN); //ロック開放
    fclose($fp);

    setcookie($cookieName , $count , $cookieTime); //10秒有効のクッキーをセット

    echo "Complete"; //clickCount.jsにはここの値を返す
}
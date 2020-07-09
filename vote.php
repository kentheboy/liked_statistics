<?php

//vote.php

//////recieve ajax
$file_id = $_POST["file_id"]; //file name
$count = $_POST["count"]; //votes
$cookieName = "vote_" . $file_id; //Cookie name
$year_time = (1*24*60*60*1000);
$cookieTime = time() + $year_time; //Cookie expiration (second)

///////Cookie
if(isset($_COOKIE[$cookieName])){
    echo "クッキー制御により投票不可です。";
}else{
///////If within cookie expiration
    $count = $_POST["count"]; //new number of votes to updated

    //file name that will be updated
    $fileName = "log/" . $file_id . ".text";
 
    $fp = @fopen($fileName , "w"); //open log file name with write mode

    flock($fp , LOCK_EX); //lock other file from being able to write or read the file by other users
    fputs($fp , $count); //write in the new vote number in it
    flock($fp , LOCK_UN); //un-lock the file to be read or written by other user
    fclose($fp);

    setcookie($cookieName , $count , $cookieTime); //set cookie for the user

    echo "Complete"; //return complete message
}
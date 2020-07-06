<?php 
//function.php

function getVoteCount($id){
    //get file name, which stores the info of given id
    $fileName = "log/" . $id . ".text";

    //open the file (read mode)
    $fp = @fopen($fileName , "r");

    if($fp){
        //get number written in the file
        $vote = fgets($fp , 9182);
    }else{
        $vote = 0;  
    }

return $vote;
}
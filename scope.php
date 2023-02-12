<?php 
$count = 10;

function displayCount(){
    global $count;
    echo $count;
    //echo $GLOBALS['count'];
}

displayCount();
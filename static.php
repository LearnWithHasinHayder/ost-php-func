<?php 
$visit = 12;
function increaseValue(){
    // static $visit = 0;
    // $visit = 0;
    global $visit;
    $visit++;

    echo $visit;
}

increaseValue();
increaseValue();
increaseValue();
increaseValue();
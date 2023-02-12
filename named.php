<?php 
function displayProfile($name, $gender="M", $title="Mr."){
    echo "{$title} {$name}, $gender \n";
}

displayProfile("John Doe");
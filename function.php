<?php

// due and dump
function approve($age) {
    if ($age >= 18) {
        echo '<pre>';
        die('You are able to enter the night club.');
        echo '</pre>';
    }
    if ($age < 18) {
        echo '<pre>';
        die('You are not old enough.');
        echo '</pre>';
    }
    
}

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

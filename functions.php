<?php


// var_dump(['a;lsdjkfl;']) // this mean var dump or variable dump 
// we can't echo to web apage a array or object but we can dump


function dumpAndDie($value)
{
    echo "<pre>"; // give all info about a req
    // var_dump($_SERVER);
    var_dump($value);
    echo "</pre>";

    die(); // kill programme or stop exicution after that
}

// dumpAndDie($_SERVER);
// echo $_SERVER['REQUEST_URI'];

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

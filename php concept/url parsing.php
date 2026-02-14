<?php
// Controller are separated and this is going to hanlde the routes

require 'functions.php';

$url = $_SERVER['REQUEST_URI'];

// what if user send a quary string with the req our router will failed to procede
// so php give us  a handy func 
dumpAndDie(parse_url($url)); //what it does
/*
http://localhost:8080/contact?name=munna
array(2) {
  ["path"]=>
  string(8) "/contact"
  ["query"]=>
  string(10) "name=munna"
}
*/
<?php

// Controller are separated and this is going to hanlde the routes

require 'functions.php';
require 'database.php';
// require 'router.php';


$id = $_GET['id']; // localhost:8080/?id=2 

// connect to database

$config = require('config.php');

$db = new Database($config, 'munna', '3m@MJ#Sha4787mu');


$query = "SELECT * FROM post WHERE id = :id;"; // never ever inline a data from user in sql query try to use ? and pass data on query exicute fn

dumpAndDie($db->query($query, [":id" => $id])->fetch());

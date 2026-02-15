<?php

// Controller are separated and this is going to hanlde the routes

require 'functions.php';
require 'database.php';
// require 'router.php';


// connect to database

$db = new Database();

dumpAndDie($db->query("SELECT * FROM post;")->fetchAll());

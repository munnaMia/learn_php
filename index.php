<?php

// Controller are separated and this is going to hanlde the routes

require 'functions.php';
require 'database.php';
// require 'router.php';


// connect to database

$config = require('config.php');

$db = new Database($config, 'munna', '3m@MJ#Sha4787mu');

dumpAndDie($db->query("SELECT * FROM post;")->fetchAll());

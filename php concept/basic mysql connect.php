<?php

// connect to mysql

// both syntax are valie
// $dsn = "mysql:host=localhost;port=3306;dbname=learnPHP;charset=utf8mb4"; // dsn string : mysql:host;port;dbname;charset
$dsn = "mysql:host=localhost;port=3306;dbname=learnPHP;user=munna;password=;charset=utf8mb4"; // dsn string : mysql:host;port;dbname;charset

// both syntax are valie
// $pdo = new PDO($dsn, 'munna', '3m@MJ#Sha4787mu');
$pdo = new PDO($dsn);

// prepare will return a prepare query
$statement = $pdo->prepare("SELECT * FROM post");

$statement->execute();


$posts = $statement->fetchAll(PDO::FETCH_ASSOC); // in normal fetcing we got result in both assosArray and index array from 
// so we can ignore that by telling we only want assosArray version PDO::FETCH_ASSOC


dumpAndDie($posts);

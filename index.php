<?php

// Controller are separated and this is going to hanlde the routes

require 'functions.php';

// require 'router.php';


// connect to database

class Database
{
    public $connection;
    public $dsn;
    // its called a constructor it called auto matically
    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;port=3306;dbname=learnPHP;user=munna;password=3m@MJ#Sha4787mu;charset=utf8mb4"; // dsn string : mysql:host;port;dbname;charset
        $this->connection = new PDO($this->dsn);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        // return $statement->fetch(PDO::FETCH_ASSOC); // in normal fetcing we got result in both assosArray and index array from 
        return $statement->fetchAll(PDO::FETCH_ASSOC); // in normal fetcing we got result in both assosArray and index array from 
    }
}

$db = new Database();

dumpAndDie($db->query("SELECT * FROM post WHERE id = 3;"));

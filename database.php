<?php


class Database
{
    public $connection;
    public $dsn;
    // its called a constructor it called auto matically
    public function __construct()
    {
        $config = [
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'learnPHP',
            'charset' => 'utf8mb4',
        ];

        $this->dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}"; // dsn string : mysql:host;port;dbname;charset

        $this->connection = new PDO($this->dsn, 'munna', '3m@MJ#Sha4787mu', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public function query($query)
    {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        // return $statement->fetch(PDO::FETCH_ASSOC); // in normal fetcing we got result in both assosArray and index array from 
        return $statement; // in normal fetcing we got result in both assosArray and index array from 
    }
}

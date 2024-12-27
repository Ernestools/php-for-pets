<?php 

class Database {
    private $connection;

    public function __construct($config) {
        $host = $config['host'];
        $dbname = $config['dbname'];
        $this->connection = new PDO(
            "mysql:host=$host;dbname=$dbname", 
            $config['user'], 
            $config['password']
        );
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection() {
        return $this->connection;
    }
}

?>
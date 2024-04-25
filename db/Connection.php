<?php

class Connection {
    protected $connection;

    function __construct()
    {
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $db = 'purephp';
        $char = 'utf8';


        try {
            $dns = 'mysql:host='.$server.';dbname='.$db.';charset='.$char;
            $this->connection = new PDO($dns, $user, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error de conexion: " . $e->getMessage();
        }
    }
}
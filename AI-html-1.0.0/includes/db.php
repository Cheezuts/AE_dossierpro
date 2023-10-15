<?php

class Database
{
    private $host;
    private $user;
    private $pass;
    private $name;
    private $connection;

    public function __construct($host, $user, $pass, $name)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->name = $name;
    }

    public function connect()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->name);

        if (!$this->connection) {
            die("La connexion à la base de données a échoué : " . mysqli_connect_error());
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }
}

// Utilisation de la classe Database
$db = new Database("localhost", "root", "toor", "AE_dossierpro");
$db->connect();
$connection = $db->getConnection();

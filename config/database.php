<?php

namespace App\Database;

use Dotenv;
use mysqli;

class DBConnection
{
    private $connection;

    public function __construct()
    {
        $dotenv = Dotenv\Dotenv::create(__DIR__ . './../');
        $dotenv->load();

        $servername = getenv('DB_HOST');
        $database = getenv('DB_DATABASE');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');

        $this->connection = new mysqli($servername, $username, $password, $database);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }

    }


    /**
     * Connection to the database
     * @return mysqli
     */
    public function connection()
    {
        return $this->connection;
    }


    /** Closing the connection
     * @return mysqli
     */
    public function disconnect() {
        mysqli_close($this->connection);
        return $this->connection;
    }
}

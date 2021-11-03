<?php


namespace Creational\Singleton;

use PDO;

class ConnectDB
{
    private static ?ConnectDB $instance = null;    // Hold the class instance.
    private PDO $conn;
    private string $host = 'localhost';
    private string $user = 'refaat';
    private string $pass = '1046610466';
    private string $name = 'test_db';

    // The db connection is established in the private constructor.
    private function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host};dbname={$this->name}", $this->user, $this->pass, [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
    }

    public static function getInstance(): ?ConnectDB
    {
        if (!self::$instance) {
            self::$instance = new ConnectDb();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->conn;
    }
}

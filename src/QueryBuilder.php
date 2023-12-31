<?php

namespace textilz\QueryBuilder;

use PDO;
use PDOException;

class SQL
{
    use DataTypes;

    private object $connection;

    private string $host;
    private string $db;
    private string $login;
    private string $password;

    /**
     * constructor
     *
     * @param string $host
     * @param string $db
     * @param string $login
     * @param string $password
     * @param string $charset
     */
    public function __construct(
        string $host,
        string $db,
        string $login,
        string $password,
        string $charset = "utf8")
    {
        $this->host = $host;
        $this->db = $db;
        $this->login = $login;
        $this->password = $password;
        return $this->connect();
    }

    /**
     * connect database
     *
     * @return bool
     */
    private function connect() : bool
    {
        try {
            $connect = new PDO(
                "mysql:host=".$this->host.";dbname=".$this->db,
                $this->login,
                $this->password);
            $this->connection = $connect;
            return true;
        } catch (PDOException $e) {
            var_dump('connection error: '.$e->getMessage());
            return false;
        }
    }

    public function createTable(array $data)
    {

    }


}
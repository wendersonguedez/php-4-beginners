<?php

class Database
{
    public PDO $connection;

    public function __construct(array $config, $username = 'root', $password = '')
    {
        // mysql:host=localhost;port=3306;dbname=php_4_beginners
        $dsn = "mysql:" . http_build_query($config, '', ';');

        $password = '';
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}

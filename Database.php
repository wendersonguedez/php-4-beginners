<?php

class Database
{
    public PDO $connection;

    /**
     * Construct a new Database object.
     *
     * @param array $config Database connection options.
     * @param string $username Username to use for the connection.
     * @param string $password Password to use for the connection.
     */
    public function __construct(array $config, $username = 'root', $password = '')
    {
        // mysql:host=localhost;port=3306;dbname=php_4_beginners
        $dsn = "mysql:" . http_build_query($config, '', ';');
        $password = '';
        
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    /**
     * Prepare and execute a SQL query.
     *
     * @param string $query The SQL query to execute.
     * @param array $params An array of parameters to pass to the query.
     *
     * @return PDOStatement The prepared statement.
     */
    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}

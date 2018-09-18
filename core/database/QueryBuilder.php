<?php
/**
 * Created by PhpStorm.
 * User: zayt
 * Date: 9/17/2018
 * Time: 11:12 AM
 */

class QueryBuilder
{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
<?php
require_once 'config.php';

class Db
{
  private $query;
  private $connection;

  public function connect()
  {
    $this->connection = pg_connect(sprintf('host=%s port=%s dbname=%s user=%s password=%s', DB_HOST, DB_PORT, DB_NAME, DB_USER, DB_PASS));
  }
}

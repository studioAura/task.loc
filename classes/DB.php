<?php
include ROOT . '/config.php';

class DB
{
  protected static $instance = null;
  private static $sql;

  function __construct(){}

  public static function instance()
  {
    if (self::$instance === null)
    {
      $opt  = array(
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES   => TRUE,
      );
      $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHAR;
      self::$instance = new PDO($dsn, DB_USER, DB_PASS, $opt);
    }
    return self::$instance;
  }

  public static function __callStatic($method, $args)
  {
    return call_user_func_array(array(self::instance(), $method), $args);
  }

  public static function run($sql, $class, $args = [])
  {
    $stmt = self::instance()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
    $stmt->execute($args);
    return $stmt->fetch();
  }

  public static function runAll($sql, $class, $args = [])
  {
    $stmt = self::instance()->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
    $stmt->execute($args);
    return $stmt->fetchAll();
  }

  public static function save($sql, $args = [])
  {
    $stmt = self::instance()->prepare($sql);
    $stmt->execute($args);
    return $stmt;
  }


}
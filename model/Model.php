<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 011 11.03.19
 * Time: 7:23
 */

class Model
{

  public static function getRow($table, $paramName, $paramValue, $className)
  {
    return DB::run("SELECT * FROM " . $table . " WHERE " . $paramName . "=?", $className, [$paramValue]);
  }

}
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.03.2019
 * Time: 5:46
 */

class Debag
{
  public static function vd($var)
  {
    echo '<pre>';
    var_dump($var);
    echo '</pre><br>';
  }
}
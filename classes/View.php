<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 011 11.03.19
 * Time: 8:28
 */

class View
{
  public static function render($template, $data = NULL)
  {
    require_once 'View/' . $template . '_tpl.php';
  }
}
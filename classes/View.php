<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 011 11.03.19
 * Time: 8:28
 */

class View
{
  public static function render($template, $currentUser = NULL, $tasks = NULL)
  {
    require_once 'view/' . $template . '_tpl.php';
  }
}
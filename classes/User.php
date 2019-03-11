<?php

class User
{
  public $id;
  public $login;
  public $password;
  public $email;
  public $user;

  public function __construct()
  {

  }

  public function getUser($login, $password)
  {
    //$this->login = $login;
    //$this->password = $password;
    $table = 'users';
    $paramName = 'login';
    $paramValue  = $login;
    $className = 'User';
    //$this->user = DB::run("SELECT * FROM users WHERE login" . "=?", 'User', [$login]);
    $this->user = Model::getRow($table, $paramName, $paramValue, $className);
    return $this->user;
  }

  public function isPassTrue($curPass)
  {
    $mdPass = md5($curPass);
    return ($mdPass == $this->user->password);
  }

  public  function exitUser()
  {
    // очищаем сессию
    // делаем редирект на главную
  }

}

?>
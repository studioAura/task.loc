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
    $this->login = $login;
    $this->password = $password;
    $this->user = DB::run("SELECT * FROM users WHERE login" . "=?", 'User', [$login]);
    return $this->user;
  }

  public function isPassTrue($curPass)
  {
    $mdPass = md5($curPass);
    return ($mdPass == $this->user->password);
  }

  public  function exit()
  {
    // очищаем сессию
    // делаем редирект на главную
  }

}

?>
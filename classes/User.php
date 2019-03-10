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
    echo 'curPass = ' . $curPass . '<br>';
    $mdPass = md5($curPass);
    echo 'pass = ' . $this->user->password . ' - md5 = ' . $mdPass . '<br>';
    return ($mdPass == $this->user->password);
  }

}

?>
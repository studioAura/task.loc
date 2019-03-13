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

  public function getUser($id)
  {
    $table = 'users';
    $paramName = 'id';
    $paramValue  = $id;
    $className = 'User';
    return Model::getRow($table, $paramName, $paramValue, $className);
  }

  public function authUser($login, $password)
  {
    $table = 'users';
    $paramName = 'login';
    $paramValue  = $login;
    $className = 'User';
    $this->user = Model::getRow($table, $paramName, $paramValue, $className);
    $mdPass = md5($password);
    if($mdPass == $this->user->password){
      return $this->user;
    } else {
      return FALSE;
    }
  }

}

?>
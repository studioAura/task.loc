<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.03.2019
 * Time: 22:52
 */

class IndexController
{

  private $template;

  function action()
  {
    $this->template = 'index';
    View::render($this->template);
  }

  public function auth()
  {
    if (isset($_POST['exit'])) {
      // очистить сессию
      echo 'Exit';
    }

    if (isset($_POST['auth'])) {
      $login = $_POST['login'];
      $password = $_POST['password'];

      $user = new User();
      $currentUser = $user->authUser($login, $password);
      if($currentUser == FALSE){
        echo 'Ошибка логина или пароля';
      } else {
        setcookie('user', $currentUser->id, time()+7200, '/');
        header('Location: /task');
      }
    }
  }

  public  function exitUser()
  {
    setcookie("user", '');
    header('Location: /');
  }

}
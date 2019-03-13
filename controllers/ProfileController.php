<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.03.2019
 * Time: 23:13
 */

class ProfileController
{
  public function action()
  {
    $userId = $_COOKIE['user'];
    $user = new User;
    $currentUser = $user->getUser($userId);
    $this->template = 'profile';
    View::render($this->template, $currentUser);
  }

  public function load()
  {
    if(isset($_POST['load'])){
      if($_FILES["filename"]["size"] > 1024*3*1024)
      {
        echo ("Размер файла превышает три мегабайта");
        exit;
      }
      // Проверяем загружен ли файл
      if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
      {
        // Если файл загружен успешно, перемещаем его
        // из временной директории в конечную
        move_uploaded_file($_FILES["filename"]["tmp_name"], "view/images/".$_FILES["filename"]["name"]);
        $table = 'users';
        $id = $_COOKIE['user'];
        $paramName = 'avatar';
        $paramValue = 'view/images/' . $_FILES['filename']['name'];
        $imgLoad = Model::setRow($table, $id, $paramName, $paramValue);
        header('Location: /profile');
      } else {
        echo("Ошибка загрузки файла");
      }
    }
  }

}
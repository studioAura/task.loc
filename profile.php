<?php
session_start();

require_once 'classes/Task.php';
require_once 'classes/DBtxt.php';

if($_POST){
    $expirationDate = $_POST['expirationDate'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d H-i-s');
    $file = $date;
    $task = new Task;
    $task->addTask($path, $file, $date, $title, $expirationDate, $content);
}

$tasks = new Task;
$files = $tasks ->allTask($path);

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Менеджер задач</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/css/style.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
  <header>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">Менеджер задач</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Задачи</a></li>
                <li><a href="profile.php">Профиль</a></li>
                <form class="navbar-form navbar-left">
                  <div class="form-group">
                    <input type="text" class="form-control" name="login" placeholder="логин">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="пароль">
                  </div>
                  <button type="submit" class="btn btn-default">Войти</button>
                </form>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>

  <div class="content">
    <div class="container">
        <div class="row">

        </div>
    </div>
  </div>
  <br><br>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="vendor/jquery/jquery-1.12.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
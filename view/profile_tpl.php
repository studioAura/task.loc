<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Менеджер задач</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/view/css/style.css">


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
              <li><a href="task">Задачи</a></li>
              <li><a href="profile">Профиль</a></li>

              <?php
              if(isset($_COOKIE['user'])){ ?>
                <form class="navbar-form navbar-left" action="index/exitUser" method="POST">
                  <button type="submit" class="btn btn-default" name="exit">Выйти</button>
                </form>
              <?php } else { ?>
                <form class="navbar-form navbar-left" action="profile/load" method="POST">
                  <div class="form-group">
                    <input type="text" class="form-control" name="login" placeholder="логин">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="пароль">
                  </div>
                  <button type="submit" class="btn btn-default" name="auth">Войти</button>
                </form>
              <?php } ?>

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

        <div class="col-xs-6 col-md-3">

          <img class="avatar" src="<?php echo $currentUser->avatar; ?>" alt="">
          <div class="load-avatar">
            <form action="profile/load" method="post" enctype="multipart/form-data">
                <label class="btn btn-primary" for="my-file-selector">
                  <input id="my-file-selector" name="filename" type="file" style="display:none"
                         onchange="$('#upload-file-info').html(this.files[0].name)">
                  Выберите файл
                </label>
                <span class='label label-info' id="upload-file-info"></span>
              <br>
              <input class="btn btn-primary btn-load" type="submit" name="load" value="Загрузить" />
            </form>
          </div>

        </div>
        <div class="col-xs-6 col-md-9">
          <?php
            echo 'Ваш логин: <b>' . $currentUser->login . '</b><br>';
            echo 'Ваш email: <b>' . $currentUser->email . '</b><br>';
            echo 'Ваш статус: <b>' . $currentUser->role . '</b><br>';
          ?>
        </div>

    </div>
  </div>
</div>
<br><br>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../vendor/jquery/jquery-1.12.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>



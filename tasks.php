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
              <li><a href="tasks.php">Задачи</a></li>
              <li><a href="profile.php">Профиль</a></li>

              <?php
              if($currentUser->login){ ?>
                <form class="navbar-form navbar-left" action="" method="POST">
                  <button type="submit" class="btn btn-default" name="exit">Выйти</button>
                </form>
              <?php } else { ?>
                <form class="navbar-form navbar-left" action="" method="POST">
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
      <?php
      /*          foreach($files as $file){
                    $content = DBtxt::load($path, $file);
                    $item = explode("|", $content);
                    echo '<div class="panel panel-default">';
                    echo '<div class="panel-heading">' . $item[1] . ' (создана: ' . $item[0] . ')</div>';
                    echo '<div class="panel-body">' . $item[3] . '</div>';
                    echo '<div class="panel-footer"> Выполнить: ' . $item[2] . '</div>';
                    echo '</div>';
                    }*/
      ?>
    </div>
    <hr>
    <!-- Форма добавления -->
    <div class="row">
      <div class="add-form">
        <form action=""  method="post">
          <div class="form-group">
            <label for="expirationDate">Дата выполнения</label>
            <input type="text" class="form-control" name="expirationDate" placeholder="дата в формате 2019-03-21">
          </div>
          <div class="form-group">
            <label for="expirationDate">Название задачи</label>
            <input type="text" class="form-control" name="title" placeholder="дайте название задаче">
          </div>
          <div class="form-group">
            <label for="content">Задача</label>
            <textarea class="form-control" name="content" rows="5" placeholder="содержимое задачи"></textarea>
          </div>
          <button type="submit" class="btn btn-success"  name="task">Добавить</button>
        </form>
      </div>
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
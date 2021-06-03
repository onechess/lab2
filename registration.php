<?php
    ini_set('display_errors','off');
    session_start();

    if($_SESSION['user'])
    {
      header('Location: account.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="index.php" style="color: green;">(Здесь будет лого)</a>
              <button  class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contacts.php">Контакты</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about.php">О компании</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <?php 
                    if(!$_SESSION['user']):
                  ?>
                    <a href="registration.php" class="btn btn-outline-success" role="button" data-bs-toggle="button">Вход/Регистрация</a>
                  <?php else:?>
                    <button type="button" class="btn btn-outline-success">Сделать заказ</button>
                    <a href="account.php" class="btn btn-outline-success" role="button" data-bs-toggle="button">Мой аккаунт</a>
                  <?php endif;?>
                </form>
              </div>
            </div>
          </nav>
    </header>
    <section>
        <div class="container">
          <div class="row">
            <div class="col center1">
              <h1>Вход</h1>
                <form action="validation/signin.php" method="post" class="form1">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Логин">
                    <input type="text" class="form-control" name="password" id="password" placeholder="Пароль">
                    <button class="btn btn-success" type="submit">Войти</button>
                </form> 
            </div>
            <div class="col center1">
              <h1>Регистрация</h1>
                <form action="validation/signup.php" method="post" class="form1">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Логин">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Эл. почта">
                    <input type="text" class="form-control" name="password" id="password" placeholder="Пароль">
                    <button class="btn btn-success" type="submit">Подтвердить</button>
                </form> 
            </div>
          </div>
        </div>
    </section>
</body>
</html>

<!--
  
-->
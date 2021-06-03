<?php
    ini_set('display_errors','off');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
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
        <h1 style="text-align: center;">Наши контакты</h1>
        <div class="Container container" style="margin-top: 60px; text-align: center;">
            <div class="row">
                <div class="col-sm">
                  <h3>Адреса</h3>
                  <p>Главный офис: улица Кирова</p>
                  <p>Второй офис: улица Ворошилова</p> 
                  <p>Третий офис: улица Курчатова</p> 
                </div>
                <div class="col-sm">
                  <h3>Соц. сети</h3>
                  <a href="#">vk.com/сбор_урожая</a> <br>
                  <a href="#">instagram.com/сбор_урожая</a> <br>
                  <a href="#">yandex.ru/сбор_урожая</a> <br>
                </div>
                <div class="col-sm">
                  <h3>Телефоны</h3>
                  <p>8 (8442) 00-33-55</p>
                  <p>+7 (900) 800-54-45</p> 
                  <p>1234567890</p> 
                </div>
              </div>
        </div>
    </section>
</body>
</html>
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
    <title>Сбор урожая</title>
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
            <div class="row align-items-center">
                <div class="col-5">
                    <h1>Добро пожаловать!</h1>
                </div>
                <div class="col-7">
                    <img class="w-100" src="https://cache.larvf.com/data/photo/w1650_ci/5j/vendageur.jpg" alt="Gathering">
                </div>
              </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Информация</h2>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://im0-tub-ru.yandex.net/i?id=fd978cc444265ee32d33550c40fbe92f-l&n=13" class="card-img-top" alt="Gather">
                        <div class="card-body">
                          <h5 class="card-title">Виды продукции</h5>
                          <p class="card-text">Какой продукцией мы занимаемся?</p>
                          <a href="#" class="btn btn-primary">Узнать</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images-eu.ssl-images-amazon.com/images/I/71tXNjdBj1L.jpg" class="card-img-top" alt="List">
                        <div class="card-body">
                          <h5 class="card-title">Список сборщиков</h5>
                          <p class="card-text">Взгляните на список наших сотрудников</p>
                          <a href="#" class="btn btn-primary">Посмотреть</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://eurabota.com/uploads/photo_1532357123.jpg" class="card-img-top" alt="Team">
                        <div class="card-body">
                          <h5 class="card-title">Наши бригады</h5>
                          <p class="card-text">Ознакомьтесь со списком наших бригад</p>
                          <a href="#" class="btn btn-primary">Ознакомиться</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="http://expert-audit39.ru/wp-content/uploads/2017/09/2.jpg" class="card-img-top" alt="Journal">
                        <div class="card-body">
                          <h5 class="card-title">Учёт сбора</h5>
                          <p class="card-text">Наш полный журнал с учётом всех сборов урожая</p>
                          <a href="#" class="btn btn-primary">Прочесть</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
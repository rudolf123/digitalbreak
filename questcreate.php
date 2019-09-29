<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GameTivist</title>

    <link href="css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="css/style-questcreate.css" rel="stylesheet">
  </head>

  <body>
    <header class="header">
      <div class="container">
        <div class="row align-items-start">
          <div class="col-4">
            <div class="header__logo">
              <a href="#" class="logo">Геймтивист</a>
            </div>
            <!-- /.header__logo -->
          </div>
          <!-- /.col-4 -->
          <div class="col-8 ">
            <nav class="header__nav">
              <li><a href="#">Партнёры</a></li>
              <li><a href="#">Квесты</a></li>
              <li><a href="#">Активисты</a></li>
              <li><a href="#">Лента</a></li>
              <li ><a href="#" class="menu-active">Личный кабинет</a></li>
              <img src="img/user_avatar/stroke-1.png" id="search-form" alt="Поиск">
            </nav>            
            <!-- /.header__nav -->
          </div>
          <!-- /.col-8 -->
        </div>
        <!-- /.row -->
      </div>
    <!-- /.container -->
    </header>
    <!-- /.header -->
    <section class="registration">
      <div class="container">
        <h2>Создание квеста</h2>
        <form action="#" method="post" class="main-form">
          <label for="title">Заголовок</label>
          <input type="text" name="title" id="title">
          <label for="level">Уровень</label>
          <select name="level" id="level">
            <option value="easy">Бронзовый и выше</option>
            <option value="medium">Серебрянный и выше</option>
            <option value="hard">Золотой</option>
          </select>
          <label for="date">Дата проведения</label>
          <input type="text" name="date" id="date">
          <label for="place">Место проведения</label>
          <input type="text" name="place" id="place">
          <label for="reward">Вознаграждение</label>
          <textarea name="reward" id="reward"></textarea>
          <label for="function">Функции</label>
          <textarea name="function" id="function"></textarea>
          <label for="requirements">Требования к волонтёрам</label>
          <textarea name="requirements" id="requirements"></textarea>
          <label for="description">Описание квеста</label>
          <textarea name="description" id="description"></textarea>
          <input type="submit" value="СОЗДАТЬ КВЕСТ">

        </form>
      <!-- /.main-form -->
      </div>
    </section>
    <!-- /.registration -->






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  </body>
</html>
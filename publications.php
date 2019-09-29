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
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <header class="header">
      <div class="container">
        <div class="row align-items-start">
          <div class="col-4">
            <div class="header__logo">
              <a href="index.php" class="logo">Геймтивист</a>
            </div>
            <!-- /.header__logo -->
          </div>
          <!-- /.col-4 -->
          <div class="col-8 ">
            <nav class="header__nav">
              <li><a href="#">Партнёры</a></li>
              <li><a href="#">Квесты</a></li>
              <li><a href="activist.php">Активисты</a></li>
              <li><a href="lenta.php">Лента</a></li>
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

    <section class="user-profile">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <div class="user__left-information">
              <div class="user-photo">
                <img src="img/user_avatar/adolescent-attractive-backpack-1462630@3x.png" alt="avatar">
              </div>
              <!-- /.user-photo -->
            </div>
            <!-- /.user__left-information -->
          </div>
          <!-- /.col-4 -->
          <div class="col-8">
            <h2 class="user-name">Варламова Екатерина Дмитриевна</h2>
            <h3 class="user-status">Волонтёр</h3>
            <nav class="user__nav">
              <ul class="user__nav-menu">
                <li><a href="profile.php">Профиль</a></li>
                <li><a href="achievments.php">Достижения</a></li>
                <li class="menu-active user__nav_menu-active"><a href="publications.php">Публикации</a></li>
              </ul>
            </nav>
            <div class="user_sort">
              <label for="main_sort">Сортировка</label>
              <select name="main_sort" id="main_sort">
                <option value="popular">По популярности</option>
                <option value="newest">По новизне</option>
                <option value="oldest">Сначала старые</option>
              </select>
            </div>
          </div>
        </div>
        <!-- /.col-8 -->
      </div>
      <!-- /.container-fluid -->
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="publication">
              <img src="img/group.png" alt="">
              <div class="social-activity">
                <div class="comments"><p>54 комментария</p></div>
                <div class="likes">
                  <p>1025</p>
                  <img src="img/like-1.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="publication">
              <img src="img/group-2.png" alt="">
              <div class="social-activity">
                <div class="comments"><p>48 комментариев </p></div>
                <div class="likes">
                  <p>1000</p>
                  <img src="img/like-1.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="publication">
              <img src="img/group-3.png" alt="">
              <div class="social-activity">
                <div class="comments"><p>45 комментариев </p></div>
                <div class="likes">
                  <p>980</p>
                  <img src="img/like-1.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="publication">
              <img src="img/group-5.png" alt="">
              <div class="social-activity">
                <div class="comments"><p>40 комментариев</p></div>
                <div class="likes">
                  <p>880</p>
                  <img src="img/like-1.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="publication">
              <img src="img/group-6.png" alt="">
              <div class="social-activity">
                <div class="comments"><p>33 комментария </p></div>
                <div class="likes">
                  <p>800 </p>
                  <img src="img/like-1.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="publication">
              <img src="img/group-7.png" alt="">
              <div class="social-activity">
                <div class="comments"><p>40 комментариев </p></div>
                <div class="likes">
                  <p>760</p>
                  <img src="img/like-1.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn achieve-button">СМОТРЕТЬ ВСЕ ПУБЛИКАЦИИ</button>
      </div>
    </section>
    <!-- /.user-profile -->






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  </body>
</html>
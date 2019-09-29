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
    <script src="http://code.jquery.com/jquery-git2.js"></script> 
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
              <li><a href="questlist.php">Квесты</a></li>
              <li><a href="activist.php">Активисты</a></li>
              <li><a href="lenta.php">Лента</a></li>
              <li ><a href="profile.php" >Личный кабинет</a></li>
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
    <section class="main">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img class="maskot" src="img/Comp_7.gif" alt="Логотип">
          </div>
          <div class="col-6">
            <p class="dialog">Привет! <br>
              Я Тиви — твой помощник  в море волонтерства. </p>
            <p class="dialog-cont">Присоединяйся к моей команде</p>
            <button id="regist" class="btn-index">ЗАРЕГИСТРИРОВАТЬСЯ</button>
            <button id="login" class="btn-index btn-o">ВОЙТИ</button>
            <a href="#" class="with_reg">Продолжить без регистрации</a>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

<script>

$( document ).ready(function(){
    console.log("asdasd");
          $('#regist').click(function() {
              console.log("asdasd");
            window.location = "regist.php";
          });
}
);


</script>
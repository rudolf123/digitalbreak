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
    <link href="js/css/alertify.min.css" rel="stylesheet">
    <link href="js/css/themes/bootstrap.min.css" rel="stylesheet">
    <link href="js/css/themes/default.min.css" rel="stylesheet">
    <link href="js/css/themes/semantic.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-git2.js"></script>    
    <script src="js/alertify.min.js"></script>
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
    <section class="registration">
      <h2>Регистрация</h2>
      <form action="#" method="post" class="main-form">
        <label for="firstname">Имя</label>
        <input type="text" name="firstname" id="firstname">
        <label for="secondname">Фамилия</label>
        <input type="text" name="secondname" id="secondname">
        <label for="patronymic">Отчество</label>
        <input type="text" name="patronymic" id="patronymic">
        <label for="birthday">Дата рождения (ГГГГ-ММ-ДД)</label>
        <input type="text" name="birthday" id="birthday">
        <label for="phone">Номер телефона</label>
        <input type="text" name="phone" id="phone">
        <p>Нажимая кнопку "Зарегистрироваться" вы соглашаетесь
        с политикой об обработке личных данных</p>
        <input type="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ">
      </form>
      <!-- /.main-form -->
    </section>
    <!-- /.registration -->
  </body>
</html>

<script>

$( document ).ready(function(){

          $('form').submit(function(e) {

            var $form = $(this);
            console.log($form.serialize());
            $.ajax({
              type: $form.attr('method'),
              url: "reg_user.php",
              data: $form.serialize()
            }).done(function(data) {
                console.log(data);
                if (data == 500)
                    alertify.error('Ошибка. Проверьте правильность заполнения полей');
                else{
                  alertify.alert("Поздравляем!","Вы успешно зарегистрированы!", function(){
                    window.location = "profile.php";
                    });
                  console.log(data);
                  console.log('success');
                }
            }).fail(function() {
              alertify.error('Ошибка. Проверьте правильность заполнения полей');
            });
            //отмена действия по умолчанию для кнопки submit
            e.preventDefault(); 
          });
          
}
);


</script>
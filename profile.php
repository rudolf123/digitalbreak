<?php session_start(); 
        require_once 'connection.php';
         
        $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
        $query ="SELECT `id`, `firstname`, `patronymic`, `secondname`, `phone`, `birthday`, `is_checked`, `is_volunteer`, `checknum`, `level`, `city`, `description`, `photo` FROM `user` WHERE `phone`=".$_SESSION['userphone'];
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        $data=mysqli_fetch_assoc($result);
?>
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
              <li><a href="questlist.php">Квесты</a></li>
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
                <img src="<?php echo $data['photo']?>" alt="avatar">
              </div>
              <!-- /.user-photo -->
              <div class="user__social">
                <a href="#"><img src="img/group-14.png" alt="VK"></a>
                <a href="#"><img src="img/group-13.png" alt="Twitter"></a>
                <a href="#"><img src="img/group-11.png" alt="Instagramm"></a>
                <a href="#"><img src="img/group-2-.png" alt="Добровольцы России"></a>
              </div>
              <h3 class="user-status user-team">Команда</h3>
              <div class="user__team">
                <img src="img/user_team/group-3.png" alt="#">
                <img src="img/user_team/group-15.png" alt="#">
                <img src="img/user_team/group-5.png" alt="#">
                <img src="img/user_team/group-4.png" alt="#">
                <img src="img/user_team/group-6.png" alt="#">
                <img src="img/user_team/group-7.png" alt="#">
              </div>
              <button class="btn-index">Предложить проект</button>
            <!-- /.user__left-information -->
            </div>
            <!-- /.user__left-information -->
          </div>
          <!-- /.col-4 -->
          <div class="col-8">
            <h2 class="user-name"><?php echo $data['secondname']." ".$data['firstname']." ".$data['patronymic'] ?></h2>
            <h3 class="user-status">Волонтёр</h3>
            <nav class="user__nav">
              <ul class="user__nav-menu">
                <li class="menu-active user__nav_menu-active"><a href="profile.php">Профиль</a></li>
                <li><a href="achievments.php">Достижения</a></li>
                <li><a href="publications.php">Публикации</a></li>
              </ul>
            </nav>
            <div class="user-location">
              <img src="img/outline-location-on-24-px.png" alt="geo">
              <p class="current-city">Пензенская область</p>
            </div>
            <div class="user-birthday">
              <img src="img/gift.png" alt="gift">
              <p class="birthday"><?php echo $data['birthday']?></p>
            </div>
            <div class="user-competitions">
              <ul>
                <li class="competition">Экологическое волонтерство</li>
                <li class="competition">Донорство</li>
                <li class="competition">Социальная помощь</li>
              </ul>
            </div>
            <h3 class="user-status">Личная информация</h3>
            <p class="user-description"><?php 
            if ($data['description'] == "") 
                echo "<a id='addDesc' href='#'>Добавить данные</a>"; 
            else {
                echo $data['description'];
            echo "<p><a id='addDesc' href='#'>Изменить данные</a></p>";
            }?></p>
            <textarea id='user_desc' rows='10' cols='45' hidden="hidden"></textarea>
          </div>
        </div>
        <!-- /.col-8 -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.user-profile -->
  </body>
</html>

<script>

$( document ).ready(function(){

          $('#addDesc').click(function() {
              if ($('#addDesc').text() == "Сохранить")
              {
                  $.ajax({
                      url: "saveuserdesc.php",
                      method:"POST",
                      data:{
                        desc: $('#user_desc').val(),
                      },
                    }).done(function(data) {
                        console.log(data);
                        if (data == "500")
                            alertify.error('Ошибка. Проверьте правильность заполнения полей');
                        else{
                          alertify.alert("","Изменения сохранены", function(){
                            });
                          console.log(data);
                          console.log('success');
                          $('.user-description').text($('#user_desc').val());
                          $('#user_desc').hide();
                          $('#addDesc').text("Изменить");
                        }
                    }).fail(function() {
                      alertify.error('Ошибка. Проверьте правильность заполнения полей');
                    });
              }
              else{
                $('#addDesc').text("Сохранить");
                $('#user_desc').show();
              }

            
          });
          
}
);


</script>
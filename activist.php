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
              <a href="index.php" class="logo">Геймтивист</a>
            </div>
            <!-- /.header__logo -->
          </div>
          <!-- /.col-4 -->
          <div class="col-8 ">
            <nav class="header__nav">
              <li><a href="#">Партнёры</a></li>
              <li><a href="questlist.php">Квесты</a></li>
              <li><a href="#"  class="menu-active">Активисты</a></li>
              <li><a href="lenta.php">Лента</a></li>
              <li ><a href="profile.php">Личный кабинет</a></li>
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

  </body>
</html>

<script>
$( document ).ready(
    ajaxSelect()
);

function ajaxSelect(){
      $.ajax({
      url: "getvol.php",
      context: document.body,
        xhrFields: {
            withCredentials: true
        },
      success: function(response){
        data = JSON.parse(response);
        console.log(data);
        var username;
        var photo;
        var birth_date;
        var bio;
        var settlement;
        
        for (var i = 0; i<data.results.length; i++){
            username = data.results[i].username;
            photo = data.results[i].photo.medium;
            birth_date = data.results[i].birth_date;
            bio = data.results[i].bio;
            settlement = data.results[i].settlement;

            var template = '    <section class="user-profile">     <div class="container-fluid"> <div class="row"><div class="col-4"><div class="user__left-information"><div class="user-photo"> <img src="' + photo +' " alt="avatar"> </div>   </div>  </div>' + '         <div class="col-8">           <h2 class="user-name">'+ username +'</h2>            <h3 class="user-status">Волонтёр</h3>           <div class="user-location">              <img src="img/outline-location-on-24-px.png" alt="geo">              <p class="current-city">' + settlement + '</p>            </div>            <div class="user-birthday">              <img src="img/gift.png" alt="gift">              <p class="birthday">' + birth_date + '</p>            </div>            <h3 class="user-status">Личная информация</h3>            <p class="user-description">' + bio + '</p>          </div>        </div>           </div>       </section>';
                            
            $('body').append(template);
            $( "#initiative_" + i).click(function(e) {
                console.log($(this).data("value"));
                //var count = (int)$("#div_initiative_" + $(this).data("value")).html();
                //$( "#div_initiative_" + $(this).data("value")).text(count);
            });
        }
      }
    });
}  



  

</script>
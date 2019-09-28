<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Росток - Инициативы</title>
	<link rel="stylesheet" href="initiative/style/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="initiative/style/style.css">
    <script src="http://code.jquery.com/jquery-git2.js"></script>
</head>
<body>
	<header>
		<div class="header_contain">
			<div class="logo">
				<img src="initiative/img/rostokzh-01.png" alt="">
				<p>РОСТОК</p>
			</div>
			<div class="geo_location">
				<a class="geo_name">Пензенская область</a>
				<img src="initiative/img/path.png" alt="">
			</div>
			<nav class="main_navigation">
				<ul>
					<li><a href="#"><span class="choosen">Инициативы</span></a></li>
					<li><a href="#">Волонтёры</a></li>
					<li><a href="#">Эксперты</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">Личный кабинет</a></li>
				</ul>			
			</nav>
			<img src="initiative/img/baseline-search-24-px.png" alt="Поиск" class="search">
		</div>
	</header>
	<section class="main_section">
		<div class="wrapper">
			<h2>Инициативы</h2>
			<ul>
				<li><a href="initiativelist.php">Все инициативы</a></li>
				<li><a href="initiative.php"><span class="choosen">Добавить инициативу</span></a></li>
			</ul>
			<form action="#" method="post">
				<p><select id="cat" name="category" class="category" required>
					<option disabled selected hidden>Выберите тему</option>
				
				</select></p>
				<label for="appeal_header"><p>Заголовок обращения</p></label>
				<input type="text" name="appeal_header" id="appeal_header" required>
				<label for="appeal_text"><p>Текст обращения</p></label>
				<textarea name="appeal_text" id="appeal_text" required></textarea>
				<div class="buttons">
					<label for="appeal_image" class="image_label">Выберите изображение</label>
					<input type="file" name="appeal_image" class="appeal_image" id = "appeal_image">
					<input type="submit">
				</div>
			</form>
		</div>
	</section>
</body>
</html>
<script>

$( document ).ready(
    ajaxSelect()
);

$(function() {
      $('form').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('method'),
          url: "http://localhost/add_initiative.php",
          data: $form.serialize()
        }).done(function() {
          window.location = "http://localhost/initiativelist.php";
        }).fail(function() {
          console.log('fail');
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault(); 
      });
    });

function ajaxSelect(){
      $.ajax({
      url: "http://localhost/select_category.php",
      context: document.body,
      success: function(response){
        data = JSON.parse(response);
        console.log(data);
        select = document.getElementById('cat');

        for (var i = 0; i<data.length; i++){
            var opt = document.createElement('option');
            opt.value = data[i].id;
            opt.innerHTML = data[i].name;
            select.appendChild(opt);
        }
      }
    });
}    
</script>
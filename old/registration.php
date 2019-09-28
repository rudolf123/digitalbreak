<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Росток - Регистрация</title>
	<link rel="stylesheet" href="register/style/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="register/style/style.css">
    <script src="http://code.jquery.com/jquery-git2.js"></script>
</head>
<body>
	<header>
		<div class="header_contain">
			<div class="logo">
				<img src="register/img/rostokzh-01.png" alt="">
				<p>РОСТОК</p>
			</div>
			<div class="geo_location">
				<a class="geo_name">Пензенская область</a>
				<img src="register/img/path.png" alt="">
			</div>
			<nav class="main_navigation">
				<ul>
					<li><a href="#">Инициативы</a></li>
					<li><a href="#">Волонтёры</a></li>
					<li><a href="#">Эксперты</a></li>
					<li><a href="#">О проекте</a></li>
					<li><a href="#">Личный кабинет</a></li>
				</ul>			
			</nav>
			<img src="register/img/baseline-search-24-px.png" alt="Поиск" class="search">
		</div>
	</header>
	<section class="main_section">
		<div class="wrapper">
			<h2>Регистрация</h2>
			<div class="content">
			<div class="left_part">
				<form action="#" method="post">
					<label for="firstname"><p>Имя</p></label>
					<input type="text" name="firstname" id="firstname" required>
					<label for="patronymic"><p>Отчество</p></label>
					<input type="text" name="patronymic" id="patronymic" required>
					<label for="secondname"><p>Фамилия</p></label>
					<input type="text" name="secondname" id="secondname" required>
					<label for="birthday"><p>Дата рождения</p></label>
					<input type="text" name="birthday" id="birthday" required>
					<label for="phone"><p>Номер телефона</p></label>
					<input type="text" name="phone" id="phone" required>
					<div class="checkbox">
						<input type="checkbox" name="volunteer" id="volunteer">
						<label for="volunteer">Зарегистрироваться как волонтёр</label>
						<p>Нажимая кнопку "Зарегистрироваться" вы соглашаетесь с политикой об обработке личных данных</p>
					</div>
					<input type="submit" value='ЗАРЕГИСТРИРОВАТЬСЯ'>
				</form>
			</div>
			<div class="right_part">
				<img src="register/img/invalid-name@3x.png" alt="Вашм шаги">
				<div class="labels">
					<p>Зарегистрируйся</p>
					<p>Добавь свою инициативу</p>
					<p>Становись волонтёром для дугих проектов</p>
					<p>Участвуй в голосовании</p>
					<p>Изменяй жизнь города к лучшему</p>
				</div>
			</div>
			</div> <!-- /content-->
		</div>
	</section>
</body>
</html>

<script>

$( document ).ready(function(){
          $('form').submit(function(e) {

            var $form = $(this);
            console.log($form.serialize());
            $.ajax({
              type: $form.attr('method'),
              url: "http://localhost/reg_user.php",
              data: $form.serialize()
            }).done(function(data) {
              console.log(data);
              console.log('success');
            }).fail(function() {
              console.log('fail');
            });
            //отмена действия по умолчанию для кнопки submit
            e.preventDefault(); 
          });
          
}
);


</script>
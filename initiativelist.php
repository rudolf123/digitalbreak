<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Росток - Инициативы</title>
	<link rel="stylesheet" href="initiativelist/style/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="initiativelist/style/style.css">
    <script src="http://code.jquery.com/jquery-git2.js"></script>
</head>
<body>
	<header>
		<div class="header_contain">
			<div class="logo">
				<img src="initiativelist/img/rostokzh-01.png" alt="">
				<p>РОСТОК</p>
			</div>
			<div class="geo_location">
				<a class="geo_name">Пензенская область</a>
				<img src="initiativelist/img/path.png" alt="">
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
			<img src="initiativelist/img/baseline-search-24-px.png" alt="Поиск" class="search">
		</div>
	</header>
	<section class="main_section">
		<div class="wrapper">
			<h2>Инициативы</h2>
			<ul>
				<li><a href="initiativelist.php"><span class="choosen">Все инициативы</a></li>
				<li><a href="initiative.php">Добавить инициативу</a></li>
			</ul>
			<form action="#" method="post" style="padding-bottom:20px">
				<div class="categories">
				<select name="category" class="category" required>
					<option disabled selected hidden>Статус</option>
					<option value="1">Здравоохранение</option>
					<option value="2">Образование</option>
					<option value="3">Безопасность</option>
				</select>
				<select name="category" class="category" required>
					<option disabled selected hidden>Тема</option>
					<option value="1">Здравоохранение</option>
					<option value="2">Образование</option>
					<option value="3">Безопасность</option>
				</select>
				<select name="category" class="category" required>
					<option disabled selected hidden>Сортировка</option>
					<option value="1">Здравоохранение</option>
					<option value="2">Образование</option>
					<option value="3">Безопасность</option>
				</select>
			</div> <!-- /categories-->
			</form>
            <div id="list">
            </div>
		</div>
	</section>
</body>
</html>

<script>
$( document ).ready(
    ajaxSelect()
);

function ajaxSelect(){
      $.ajax({
      url: "http://localhost/select_initiative.php",
      context: document.body,
      success: function(response){
        data = JSON.parse(response);
        console.log(data);
        var header;
        var category;
        var content;
        var comment = 'Спасибо за предложение и заинтересованность! Мы рассмотрели данный вопрос и решили начать благоустройство сквера с субботника, который пройдет 5.08.2019. Ждем всех желающих волонтеров! Работы много, нам требуется ваша помощь. Присоединяйтесь!';

        for (var i = 0; i<data.length; i++){
            header = data[i].header;
            category = data[i].category_name;
            content = data[i].content;
            console.log(template);

            var initiative = Math.floor(Math.random() * (99 - 10) + 10);
            if (i == 2)
            {
                comment = 'Спасибо за предложение и заинтересованность! Мы рассмотрели данный вопрос и решили начать благоустройство сквера с субботника, который пройдет 5.08.2019. Ждем всех желающих волонтеров! Работы много, нам требуется ваша помощь. Присоединяйтесь!';
                var template = '<article><div class="article_user"><div class="article_header"><h3>' + header + '</h3><p>В работе</p></div>'+
            '<p class="article_category">' + category + '</p><div class="article_contain"><p>' + content+ '</p></div></div>'+
            '<div class="article_expert"><h4>Комментарий эксперта</h4><p>' + comment + '</p></div><div class="buttons">' +
            '<div id="div_initiative_'+ i +' data-value='+ i +' "style="font-size: 35px;"> +'+ initiative +'</div>' +
            '<a id="initiative_' + i + '" class="btn not_active" href="">Поддерживаю</a><a class="btn not_active" href="">Откликнуться</a></div></article>'
        }
            else
            {
                            var template = '<article><div class="article_user"><div class="article_header"><h3>' + header + '</h3><p>В работе</p></div>'+
            '<p class="article_category">' + category + '</p><div class="article_contain"><p>' + content+ '</p></div></div>'+
            '<div class="buttons">' +
            '<div id="div_initiative_'+ i +' data-value='+ i +' "style="font-size: 35px;"> +'+ initiative +'</div>' +
            '<a id="initiative_' + i + '" class="btn not_active" href="">Поддерживаю</a><a class="btn not_active" href="">Откликнуться</a></div></article>'
            }
            $('#list').append(template);
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
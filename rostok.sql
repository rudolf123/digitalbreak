-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Сен 29 2019 г., 08:28
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rostok`
--

-- --------------------------------------------------------

--
-- Структура таблицы `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `present` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `achievement`
--

INSERT INTO `achievement` (`id`, `name`, `description`, `present`) VALUES
(1, 'Ачивка 1', 'Хорошая ачика', 'group@3x.png'),
(3, 'Ачивка 2', 'Хорошая ачивка', 'group-2@3x.png'),
(4, 'Ачивка 3', 'Хорошая ачивка', 'group-3@3x.png'),
(5, 'Ачивка 4', 'Хорошая ачивка', 'group-4@3x.png'),
(6, 'Ачивка 5', 'Хорошая ачивка', 'group-5@3x.png');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Городское хозяйство '),
(2, 'Образование и социальная политика'),
(3, 'Земельные и градостроительные вопросы'),
(4, 'Транспорт и связь');

-- --------------------------------------------------------

--
-- Структура таблицы `initiative`
--

CREATE TABLE `initiative` (
  `id` int(11) NOT NULL,
  `header` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `initiative`
--

INSERT INTO `initiative` (`id`, `header`, `content`, `category_id`) VALUES
(1, 'Волонтерская программа для семей', 'Предлагаем создать волонтерское движение, в котором могут принимать участие семьи. Очень важно приучать детей к взаимопомощи, труду и активности как гражданина. Это также поможет сплотить семьи, повысить активность населения. Такие программы могли бы быть направлены на улучшение экологии города, его благоустройства, а также помощь пожилым людям и людям с ограниченными возможностями', 1),
(2, 'Организация лодочного спорта в г.Пензе ', 'Наш город находится на реке Суре, а также здесь есть много водоемов. К сожалению в последнее время в городе значительно уменьшилось количество прогулочных катеров. А проката лодок вовсе не было обнаружено. Предлагаю создать в городе лодочный клуб, который позволит не только сдавать лодки в прокат, но и обучать людей лодочному спорту, совершать сплавы по реке Суре. Наша область очень живописная и такой вид туризма позволил бы увидеть ее во всей красе, а также привлечь население к спорту и активному образу жизни. ', 4),
(3, 'Благоустройство сквера им. Дзержинского ', 'В нашем городе есть сквер им. Дзержинского, который находится около вокзала. Через него проходят много людей, приезжающих в город, однако у него очень непрезентабельный вид, негде отдохнуть и его благоустройство на низком уровне. А еще он является местом где гуляют молодые мамы и молодежь. С одной стороны он огорожен неприглядным серым забором. Здесь всегда был книжный развал, поэтому у горожан это место ассоциируется с книгой. Хотелось бы благоустроить этот сквер и сделать его визиткой нашего замечательного города Пенза.', 1),
(4, 'Восстановление канатной дороги в г.Пенза ', 'Ранее в г.Пензе существовала канатная дорога, с которой открывался прекрасный вид на панораму города. Она была своеобразной «изюминкой» Пензы, точкой притяжения. Хотим предложить восстановить канатную дорогу. Это позволит повысить привлекательность города для его населения и приезжающих туристов. В городе очень мало доступных видовых точек, а такая дорога могла бы стать достопримечательностью, точкой обзора, местом притяжения и своеобразным транспортом, соединяющим два района города, центр и парк им. Белинского. ', 3),
(5, 'Создание прогулочного маршрута в Ахунском заповеднике ', 'Г. Пенза окружен очень живописными лесами, один из которых это Ахунский заповедник, который находится в хорошей транспортной доступности с городом. Предлагаю создать в заповеднике прогулочный маршрут для жителей города и туристов. Это очень важно находиться в единении с природой, оторваться от будничной суеты. Подобная территория могла бы стать одной из любимых для отдыха горожан. ', 3),
(9, 'asdasd', 'asdasdasd', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `publications`
--

INSERT INTO `publications` (`id`, `name`, `photo`, `content`, `likes`, `user_id`) VALUES
(1, 'Как мы создавали парк Дубрава', 'group.png', 'Как мы создавали парк Дубрава', 0, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `quest`
--

CREATE TABLE `quest` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `patronymic` varchar(500) NOT NULL,
  `secondname` varchar(500) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `birthday` date NOT NULL,
  `is_checked` tinyint(4) NOT NULL,
  `is_volunteer` tinyint(4) NOT NULL,
  `checknum` int(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `city` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(200) NOT NULL DEFAULT 'img/user_avatar/empty-avatar.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `firstname`, `patronymic`, `secondname`, `phone`, `birthday`, `is_checked`, `is_volunteer`, `checknum`, `level`, `city`, `description`, `photo`) VALUES
(7, 'Владимир', 'Сергеевич', 'Юранов', '45648795', '1988-03-29', 0, 0, 12312, 0, '', '', ''),
(8, 'Екатерина ', 'Дмитриевна', 'Варламова', '222225555', '1994-05-06', 1, 1, 11, 1, 'Пензенская область', 'Являюсь волонтером с 2015 года. Веду блог про экологичный образ жизни. Помогаю людям бесплатными консультациями, как сделать жизнь более экологичной через изменение бытовых привычек. За время обучения в университете принимала участие в научных конференциях с темами работ по волонтёрству, третьему сектору, проектному методу работы. Являюсь почетным донором Российской Федерации.', 'adolescent-attractive-backpack-1462630@3x.png'),
(18, 'Илья', 'Дмитриевич', 'Остохин', '123', '1996-02-14', 0, 0, 0, 0, '', '', ''),
(19, 'saadsdasd', 'asdasd', 'asdasd', 'sdf', '1996-02-14', 0, 0, 0, 0, '', '', ''),
(20, '123', '123', '123', '1234', '1234-12-12', 0, 0, 0, 0, '', '', ''),
(21, 'Владимир', 'Сергеевич', 'Юранов', '12345', '1988-02-02', 0, 0, 0, 0, '', '', ''),
(22, 'Владимир', 'Сергеевич', 'Юранов', '123456', '1988-02-02', 0, 0, 0, 0, '', 'счямчяисяси', 'img/user_avatar/empty-avatar.png');

-- --------------------------------------------------------

--
-- Структура таблицы `user_achievment`
--

CREATE TABLE `user_achievment` (
  `achiev_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `votes`
--

CREATE TABLE `votes` (
  `user_id` int(11) NOT NULL,
  `initiative_id` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `votes`
--

INSERT INTO `votes` (`user_id`, `initiative_id`, `time`) VALUES
(2, 1, '2019-07-17 07:00:00'),
(1, 1, '2019-07-19 11:13:21');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `initiative`
--
ALTER TABLE `initiative`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `quest`
--
ALTER TABLE `quest`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `initiative`
--
ALTER TABLE `initiative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `quest`
--
ALTER TABLE `quest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

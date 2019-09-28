<?php
    require_once 'connection.php'; // подключаем скрипт
     
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
         
    $query ="SELECT u.id, u.firstname, u.patronymic, u.secondname, u.phone , u.birthday, u.level, u.city, u.description, u.photo FROM user u WHERE u.id =".;
     
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        $rows = array();
        while($r = mysqli_fetch_assoc($result)) {
            $rows[] = $r;
        }
        echo json_encode($rows, JSON_UNESCAPED_UNICODE);
    }
     
    mysqli_close($link);
?>

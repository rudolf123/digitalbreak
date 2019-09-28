<?php
    require_once 'connection.php'; // подключаем скрипт
     
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
         
    $query ="SELECT i.id, i.header, i.content, c.name AS category_name FROM initiative i INNER JOIN category c ON i.category_id = c.id";
     
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

<?php

    if (isset($_POST["appeal_header"]) && isset($_POST["appeal_text"]))
    {
        require_once 'connection.php';
         
        $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
        $appeal_header = $_POST["appeal_header"];
        $appeal_text = $_POST["appeal_text"];
        $category = $_POST["category"];
        
        $query ="INSERT INTO initiative VALUES(NULL, '$appeal_header','$appeal_text', $category)";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        if($result)
        {
            echo "200";
        }
        
        mysqli_close($link);
    }
?>

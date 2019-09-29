<?php

        session_start();
        require_once 'connection.php';
         
        $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
        $desc = $_POST["desc"];
        $query ="UPDATE `user` SET `description` = '$desc' WHERE `user`.`phone`='".$_SESSION['userphone']."'";
        $result = mysqli_query($link, $query) or die($query."Ошибка " . mysqli_error($link)); 
        if($result)
        {
            echo "200";
        }
        else
            echo "500";
        
        mysqli_close($link);

?>

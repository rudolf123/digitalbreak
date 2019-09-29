<?php

        session_start();
        require_once 'connection.php';
         
        $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
        $firstname = $_POST["firstname"];
        $patronymic = $_POST["patronymic"];
        $secondname = $_POST["secondname"];
        $phone = $_POST["phone"];
        $birthday = $_POST["birthday"];
        //$birthday = "1988-03-29";
        //$volunteer = (int)isset($_POST["volunteer"]);
        $query ="SELECT count(*) as total FROM user where phone=$phone";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
        $data=mysqli_fetch_assoc($result);
        if ($data['total']==1)
            die("Already register");

        $query ="INSERT INTO user VALUES(NULL, '$firstname', '$patronymic','$secondname', '$phone', '$birthday', 0, 0, 0, 0, '', '', 'img/user_avatar/empty-avatar.png')";
        $result = mysqli_query($link, $query) or die("500"); 
        if($result)
        {
            $_SESSION['userphone'] = $phone;
            echo "200";
        }
        else
            echo "500";
        //}
        
        mysqli_close($link);

?>

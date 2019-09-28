 <?php 
 
 $get = file_get_contents("https://api.dobrf.ru/open-api/v1/volunteers/?page_size=30");
 echo $get;
  
?>

<?php
 
  require_once 'model/user_model.php';

   $name = "test1";
   $email = "test1@gmail.com";
   
    $vare = engre($name,$email);

     if ($vare==1) {
          echo "ok";
     }
     else{
            echo"non";
     }


   
?>
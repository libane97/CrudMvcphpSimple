<?php 
 function getconnexion()
 {
     $serve ="localhost";
     $username="root";
     $pass = "";
     $dbname="mabase";
     $con = mysqli_connect($serve,$username,$pass,$dbname);
     return $con;
 }
 
  function executesql($sql)
  {
      $execution = getconnexion();
    return  mysqli_query($execution,$sql);
    
  }
?>
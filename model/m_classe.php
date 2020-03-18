<?php 
    
     require_once 'db_connect.php';

       function ajout($code,$libelle)
       {
       	  $sql = "INSERT INTO classe Values(NULL,'$code','$libelle') ";
         	 $exe=executesql($sql);

         	return $exe;
       }

 ?>
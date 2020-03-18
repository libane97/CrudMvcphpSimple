<?php
   require_once 'db_connect.php';
  function engre($name,$email)
  {
    $req = "INSERT INTO users VALUES('','compta','compta@mail.com')";

     $exe = executesql($req);
     return $exe;
    

  }
?>
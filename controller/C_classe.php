<?php
   require_once '../model/m_classe.php';
        extract($_POST);
       //  var_dump($_POST);
         if (isset($_POST['ok'])) {
         	     $code = $_POST['code'];
         	     $libelle = $_POST['libelle'];
         	   ajout($code,$libelle);
         }


 ?>
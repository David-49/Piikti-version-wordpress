<?php

include('identifiant.php');
$connection = new PDO('mysql:host=localhost;dbname=piikti;charset=utf8', $identifiant, $mdp, array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_OBJ,
  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
));

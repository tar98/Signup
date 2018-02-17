<?php
  $conn_db = "mysql:host=localhost;dbname=sign-up;charset=utf8mb4";
  $user = "db_jack";
  $pass = "CallMeJack98$";
  try
  {
      $db = new PDO($conn_db, $user, $pass);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $ex) {echo 'Connection Failed : ' . $ex->getMessage();}

?>
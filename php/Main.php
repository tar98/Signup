<?php
  session_start();

  if(isset($_SESSION['user']))
  {
    $msg = "Ha Fatto l'accesso come utente!";
    $bool = true;
  }
  else
  {
    $msg = "Non ha fatto l'accesso!";
    $bool = false;
  }
?>
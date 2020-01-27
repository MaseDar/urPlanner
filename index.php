<?php 
  //session_start(); // Это функция запоминает уникального пользлователя хранит $_SESSION['login'] = 'admin'; и тд.
  //header('location: preview.php');
//include "server/server.php";

  if (!isset($_SESSION['username'])) {
    header('location: preview.php');
    exit();
  } else {
    header('location: main_page.php');
    /*$username_base = $_SESSION['username']; // присвоиваем переменной никнейм пользователя в сессии*/
  }

?>
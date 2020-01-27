<?php 
  session_start(); // Это функция запоминает уникального пользлователя хранит $_SESSION['login'] = 'admin'; и тд.
  header('location: preview.php');

?>
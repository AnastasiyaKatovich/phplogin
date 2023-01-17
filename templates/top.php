<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="media/css/style.css"/>
    <title><Kotovich></title>
  </head>
  <body>
  <div class="header" id="header">
    <ul class="nav">
        <li class="nav-item header-nav">
          <a class="nav-link" href="#home">Главная</a>
        </li>
        <li class="nav-item header-nav">
          <?php
          if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
          ?>
          <a class="nav-link" href="logout.php">Выход</a>
          <?php
          
          }else{
          ?>
          <a class="nav-link" href="#authorization">Войти</a>

          <?php
            }
          ?>

        </li>
    </ul>
  </div>
 

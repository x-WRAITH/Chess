<!--#####################//
//     WCode(Wraith)     //
//      GramySe.pl       //
//######################-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="include/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" />
    <link rel="shortcut icon" href="image/icon.png" />
    <title>Projekt - Szachy v0.8 ❤️</title>
</head>
<body>
<div class="menu">
    <ul class="topnav">
        <li><a class="light" href="index.php">Home</a></li>
        <li><a href="index.php?mode=wyswietl">Players</a></li>
        <li><a href="index.php?mode=ranking">Ranking</a></li>
        <div class="dropdown">
            <button class="dropbtn">Admin
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="index.php?mode=zarzadzanie">Management Players</a>
                <a href="index.php?mode=zarzadzanie_ranking">Ranking System</a>
                <a href="index.php?mode=dodaj">Adding Player</a>
        </div>
    </ul>
</div>
<?php
require_once('db_connect.php');
$connect = getConnect($host, $login, $password, $database);

$connect->set_charset('utf8');
if(ISSET($_GET['mode'])){
        if(FILE_EXISTS("{$_GET['mode']}.php")){
            require_once("{$_GET['mode']}.php");} else {echo "<div class=\"text-404\" style=\"font-size: 50px\">Upss... Plik został nie odnaleziony!</div><br><img src=\"image/404.png\">";}}



disConnect($connect);
?>
<div class="allrights">
  <h2>All rights reserved for <a href="https://gramyse.pl">GramySe.pl</a></br>
    <div>&copy; 2017 - 2021</div> 
    ❤️ WCode ❤️
  </h2>
</div>
</body>
</html>

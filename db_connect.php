<?php
    require_once('db_info.php');

    function getConnect($host, $login, $password, $database){
        $connect=new mysqli($host, $login, $password, $database);
        if($connect->connect_error){
            echo "Error.. Wystąpił błąd: ".$connect->connect_error;
            echo "<br>";
            echo "Wystąpił błąd o kodzie:  ".$connect->connect_errno;
        }
        return $connect;
    }
 
    function databaseFunction($host, $login, $password, $database) {
        $connect = getConnect($host, $login, $password, "");
        $connect->query("CREATE DATABASE IF NOT EXISTS $database CHARACTER SET utf8mb4;");
        $connect->query("USE $database");
 
        $table = "szachy";
        $connect -> query ("CREATE TABLE $table (
            id INT UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
            Imie VARCHAR(50) NOT NULL,
            Nazwisko VARCHAR(50) NOT NULL,
            Punkty INT UNSIGNED NOT NULL DEFAULT 0,
            Wygrane INT UNSIGNED NOT NULL DEFAULT 0,
            Przegrane INT UNSIGNED NOT NULL DEFAULT 0,
            Remisy INT UNSIGNED NOT NULL DEFAULT 0)");
        $connect -> query ("INSERT INTO $table (id, Imie, Nazwisko, Punkty, Wygrane, Przegrane, Remisy) VALUES
            (14, 'Janfdff76575', 'Kowalss', 156, 0, 0, 0),
            (17, 'Franek', 'Marian', 25, 0, 0, 0),
            (20, 'Janeik', 'Maciek', 4, 0, 0, 0),
            (30, 'm./,m.m,', 'm,.m,.m,.', 0, 0, 0, 0);");
    }
 
    function disConnect($connect){
        $connect->close();
    }
 
    
    databaseFunction($host, $login, $password, $database);
    $connect = getConnect($host, $login, $password, $database);
    //disConnect($connect);
?>

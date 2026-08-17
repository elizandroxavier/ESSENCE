<?php
    
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "essence";

    try{

    $pdo = new PDO("mysql:host=$host;dbname=$bd;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
    die("Eroo de conexão: " .$e->getMessage());
    }
?>
<?php 

$dsn = 'mysql:host=127.0.0.1;dbname=agence;charset=utf8';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    if($pdo){
        echo"connexion reussi";
     }
} catch(PDOException $error ) {
    echo 'Une erreur est survenue : '.$error->getMessage();
}
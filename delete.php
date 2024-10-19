<?php

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $sql = $pdo->prepare("SELECT * INTO voiture WHERE immatriculation = ?");

    $req = $sql->execute([$id]);
    var_dump($req->fetch());
    die();

}
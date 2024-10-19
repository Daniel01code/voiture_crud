<?php

require_once"Connexion.php";

if(isset($_GET['id'])){
    $id =$_GET['id'];
    
    $sql= "DELETE FROM voiture WHERE immatriculation = ?";
  
    $query = $pdo->prepare($sql);
  
    $query->execute([$id]);
    // var_dump($query);
    // die();
    //on verrifi dans la base si l'element a deja ete supprimé
    if($query-> rowCount()> 0){
      $message ="<p class='success'>create success</p> ";
      header("Location: Affiche.php");
    }else{
      $message ="auccune voiture touvé";
    }
  
  }else{
    $message ="ID invalide";
  }
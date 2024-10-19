<?php
require_once"Connexion.php";

$sql = "SELECT * FROM voiture ORDER BY immatriculation DESC";

$req = $pdo->prepare($sql);
$req->execute();
$voitures = $req->fetchAll();


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>liste des voiture</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">modele</th>
      <th scope="col">marque</th>
      <th scope="col">actions</th>
    </tr>
  </thead>
  <tbody>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>
            <a href="nouveau_vehicule.php" class="btn btn-success">ajouter une voiture</a>

            </th>
        </tr>
      <?php foreach($voitures as $voiture) : ?>
            <tr>
                <th scope="row"><?=$voiture["immatriculation"]?></th>
                <td><?=$voiture["modele"]?></td>
                <td><?=$voiture["nom"]?></td>
                <td>
                    <a href="http://localhost/projet_complet_blog_poo/admin/posts/edit/" class="btn btn-warning">modifier</a>
                    <a href="delete.php?id=<?= $voiture['immatriculation'] ?>" class="btn btn-danger">supprimer</a>
                    <!-- <form  class="d-inline" method="POST" action="http://localhost/projet_complet_blog_poo/admin/posts/delete/">
                        <button class="btn btn-danger">supprimer</button>
                    </form> -->

                </td>
            </tr>

        <?php endforeach ?> 
        </tr>
  </tbody>
</table>
    
</body>
</html>
<?php
require_once"Connexion.php";
$message ="";


function clean_input($data){
  return htmlspecialchars(stripslashes( trim($data)));
}
if(isset($_POST["ajouter"])){

    $modele = clean_input($_POST['modele']);
    $nom = clean_input($_POST['nom']);

    if(empty($modele)||empty($nom)){
        $message="veuillez remplir tout les champ";
    }else{

        $sql ="INSERT INTO voiture (modele,nom)
        VALUES(?,?)";

        $query = $pdo->prepare($sql);
        $query->execute([$modele, $nom]);
    


    }

}




?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ajouter une voiture</title>
</head>
<body>
<h1>Ajouter une voiture</h1>
<p>
    <?php echo $message; ?>

</p>
<form action="" method="POST">
    <div class="form-group">

        <label for="nom">Nom de la voiture</label>
        <input type="text" class="form-control" name="nom" id="nom">

    </div>
    <div class="form-group">

        <label for="modele">modele</label>
        <input type="text" class="form-control" name="modele" id="modele">

    </div>
    <button type="submit" class="btn btn-primary" name="ajouter">ajouter la voiture</button>
</form>
<a href="http://localhost/voiture_crud/Affiche" class="btn btn-warning">acceuil</a>

</body>
</html>
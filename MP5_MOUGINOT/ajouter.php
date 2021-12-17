
<!doctype html>
<html>
<head>
  <title>
   PHP EXO 5
  </title>
  <meta charset="utf-8"/>
 </head>
 <body>
 <h1>Résultat de la commande effectuée. </h1>
 <h2><a href="ajouter.html">Retour au gestionnaire de formulaire</a></h2>
 <?php
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['telephone']) && isset($_POST['email'])){
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $telephone = $_POST['telephone'];
  $email = $_POST['email'];
  $qualite = "¤*¤";
  if(isset($_POST['qualite'])){
    $qualite = $_POST['qualite'];
  }

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=mp4;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$id = 1;
$reponse = $bdd->query("SELECT id FROM contact;");
while ($donnees = $reponse->fetch())
{
    $id = $donnees['id'] + 1;
}
$reponse->closeCursor();

$reponse = $bdd->query("INSERT INTO contact VALUES ($id, '$nom', '$prenom', '$email', '$telephone', '$qualite');");
}
?>
</body>
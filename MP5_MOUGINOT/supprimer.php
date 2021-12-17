
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
<h2><a href="supprimer.html">Retour au gestionnaire de formulaire</a></h2>
 <?php

if(isset($_POST['rechercher'])){
  $first = true;
 $obj_of_req = "";

 if (isset($_POST['nom'])) {
     if ($_POST['nom'] != ""){
         if ($first) {
             $temp = $_POST['nom'];
             $obj_of_req .= " WHERE nom=\"$temp\" ";
             $first = false;
         }
     }
 }
 if (isset($_POST['prenom'])) {
     if ($_POST['prenom'] != ""){
         if ($first) {
             $temp = $_POST['prenom'];
             $obj_of_req .= " WHERE prenom=\"$temp\" ";
             $first = false;
         }
         else {
             $temp = $_POST['prenom'];
             $obj_of_req .= " AND prenom=\"$temp\" ";
         }
     }
 }
 if (isset($_POST['numero'])) {
     if ($_POST['numero'] != ""){
         if ($first) {
             $temp = $_POST['numero'];
             $obj_of_req .= " WHERE numero=\"$temp\" ";
             $first = false;
         }
         else {
             $temp = $_POST['numero'];
             $obj_of_req .= " AND numero=\"$temp\" ";
         }
     }
 }
 if (isset($_POST['email'])) {
     if ($_POST['email'] != ""){
         if ($first) {
             $temp = $_POST['email'];
             $obj_of_req .= " WHERE email=\"$temp\" ";
             $first = false;
         }
         else {
             $temp = $_POST['email'];
             $obj_of_req .= " AND email=\"$temp\" ";
         }
     }
 }
 if (isset($_POST['qualite'])) {
     if ($_POST['qualite'] != ""){
         if ($first) {
             $temp = $_POST['qualite'];
             $obj_of_req .= " WHERE qualite=\"$temp\" ";
             $first = false;
         }
         else {
             $temp = $_POST['qualite'];
             $obj_of_req .= " AND qualite=\"$temp\" ";
         }
     }
 }

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=mp4;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query("SELECT * FROM contact$obj_of_req");
while ($donnees = $reponse->fetch())
{
    $nom1 = $donnees['nom'];
    $prenom1 = $donnees['prenom'];
    $email1 = $donnees['email'];
    $telephone1 = $donnees['telephone'];
    $qualite1 = $donnees['qualite'];
    echo "$nom1 $prenom1 | $email1 | $telephone1 | $qualite1 <br>";
}
$reponse->closeCursor(); 
}




else{
$first = true;
 $obj_of_req = "";

 if (isset($_POST['nom'])) {
     if ($_POST['nom'] != ""){
         if ($first) {
             $temp = $_POST['nom'];
             $obj_of_req .= " WHERE nom=\"$temp\" ";
             $first = false;
         }
     }
 }
 if (isset($_POST['prenom'])) {
     if ($_POST['prenom'] != ""){
         if ($first) {
             $temp = $_POST['prenom'];
             $obj_of_req .= " WHERE prenom=\"$temp\" ";
             $first = false;
         }
         else {
             $temp = $_POST['prenom'];
             $obj_of_req .= " AND prenom=\"$temp\" ";
         }
     }
 }
 if (isset($_POST['numero'])) {
     if ($_POST['numero'] != ""){
         if ($first) {
             $temp = $_POST['numero'];
             $obj_of_req .= " WHERE numero=\"$temp\" ";
             $first = false;
         }
         else {
             $temp = $_POST['numero'];
             $obj_of_req .= " AND numero=\"$temp\" ";
         }
     }
 }
 if (isset($_POST['email'])) {
     if ($_POST['email'] != ""){
         if ($first) {
             $temp = $_POST['email'];
             $obj_of_req .= " WHERE email=\"$temp\" ";
             $first = false;
         }
         else {
             $temp = $_POST['email'];
             $obj_of_req .= " AND email=\"$temp\" ";
         }
     }
 }
 if (isset($_POST['qualite'])) {
     if ($_POST['qualite'] != ""){
         if ($first) {
             $temp = $_POST['qualite'];
             $obj_of_req .= " WHERE qualite=\"$temp\" ";
             $first = false;
         }
         else {
             $temp = $_POST['qualite'];
             $obj_of_req .= " AND qualite=\"$temp\" ";
         }
     }
 }
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=mp4;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if($obj_of_req!= ""){
$reponse = $bdd->query("DELETE FROM contact$obj_of_req");
}
}
?>
</body>
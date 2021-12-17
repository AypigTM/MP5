
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
<h2><a href="modifier.html">Retour au gestionnaire de formulaire</a></h2>
 <?php
 $first = true;
 $obj_of_req = "";

if (isset($_POST['nom'])) {
  if ($_POST['nom'] != ""){
      if ($first) {
          $temp = $_POST['nom'];
          $obj_of_req .= " WHERE nom='$temp' ";
          $first = false;
      }
  }
}
if (isset($_POST['prenom'])) {
  if ($_POST['prenom'] != ""){
      if ($first) {
          $temp = $_POST['prenom'];
          $obj_of_req .= " WHERE prenom='$temp' ";
          $first = false;
      }
      else {
          $temp = $_POST['prenom'];
          $obj_of_req .= " AND prenom='$temp' ";
      }
  }
}
if (isset($_POST['telephone'])) {
  if ($_POST['telephone'] != ""){
      if ($first) {
          $temp = $_POST['telephone'];
          $obj_of_req .= " WHERE telephone='$temp' ";
          $first = false;
      }
      else {
          $temp = $_POST['telephone'];
          $obj_of_req .= " AND telephone='$temp' ";
      }
  }
}
if (isset($_POST['email'])) {
  if ($_POST['email'] != ""){
      if ($first) {
          $temp = $_POST['email'];
          $obj_of_req .= " WHERE email='$temp' ";
          $first = false;
      }
      else {
          $temp = $_POST['mail'];
          $obj_of_req .= " AND email='$temp' ";
      }
  }
}
if (isset($_POST['qualite'])) {
  if ($_POST['qualite'] != ""){
      if ($first) {
          $temp = $_POST['qualite'];
          $obj_of_req .= " WHERE qualite='$temp' ";
          $first = false;
      }
      else {
          $temp = $_POST['qualite'];
          $obj_of_req .= " AND qualite='$temp' ";
      }
  }
}


$first = true;
$rea_of_req = "";

if (isset($_POST['nom1'])) {
 if ($_POST['nom1'] != ""){
     if ($first) {
         $temp = $_POST['nom1'];
         $rea_of_req .= " SET nom='$temp' ";
         $first = false;
     }
 }
}
if (isset($_POST['prenom1'])) {
 if ($_POST['prenom1'] != ""){
     if ($first) {
         $temp = $_POST['prenom1'];
         $rea_of_req .= " SET prenom='$temp' ";
         $first = false;
     }
     else {
         $temp = $_POST['prenom1'];
         $rea_of_req .= " ,prenom='$temp' ";
     }
 }
}
if (isset($_POST['telephone1'])) {
 if ($_POST['telephone1'] != ""){
     if ($first) {
         $temp = $_POST['telephone1'];
         $rea_of_req .= " SET telephone='$temp' ";
         $first = false;
     }
     else {
         $temp = $_POST['telephone1'];
         $rea_of_req .= " ,telephone='$temp' ";
     }
 }
}
if (isset($_POST['email1'])) {
 if ($_POST['email1'] != ""){
     if ($first) {
         $temp = $_POST['email1'];
         $obj_of_req .= " SET email='$temp' ";
         $first = false;
     }
     else {
         $temp = $_POST['email1'];
         $obj_of_req .= " ,email='$temp' ";
     }
 }
}
if (isset($_POST['qualite1'])) {
 if ($_POST['qualite1'] != ""){
     if ($first) {
         $temp = $_POST['qualite1'];
         $obj_of_req .= " SET qualite='$temp' ";
         $first = false;
     }
     else {
         $temp = $_POST['qualite1'];
         $obj_of_req .= " ,qualite='$temp' ";
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


$reponse = $bdd->query("UPDATE contact$rea_of_req $obj_of_req ");
?>
</body>
</html>
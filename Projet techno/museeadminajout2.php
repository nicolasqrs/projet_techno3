<?php
session_start();
if(!isset($_SESSION["mail"])){
    header("location:connexion.php");
}
$id = mysqli_connect("localhost:3307","root","","musee");
//var_dump($_POST);
$idc = $_POST["idc"];
$marque = $_POST["marque"];
$modele = $_POST["modele"];
$annee = $_POST["annee"];
$qte = $_POST["qte"];
$likes = $_POST["likes"];
$prix = $_POST["prix"];
$bio = $_POST["bio"];
$nom = $_POST["nom"];
$imageid = $_POST["imageid"];
$categorie = $_POST["categorie"];
$id = mysqli_connect("localhost","root","root","musee");
$req = "INSERT INTO `cars` (`idc`, `marque`, `modele`, `annee`, `qte`, `likes`, `prix`, `bio`, `nom`, `categorie`, `imageid`) VALUES (NULL, '$marque', '$modele', '$annee', '$qte', '$likes', '$prix', '$bio', '$nom', '$categorie', '$imageid')"; 
$res = mysqli_query($id, $req);
echo mysqli_error($id);
echo"<h3>La voiture a été rajouté</h3>";
header("refresh:3, url=museeadmin.php"); 

?>
<link rel="stylesheet" href="museemenu.css">
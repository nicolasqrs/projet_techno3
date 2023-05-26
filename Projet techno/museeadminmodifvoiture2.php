<?php

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
$id = mysqli_connect("localhost:3307","root","","musee");
$req = "update cars set nom = '$nom',
                            marque = '$marque',
                            modele = '$modele',
                            annee = '$annee',
                            qte = '$qte',
                            likes = '$likes',
                            prix = '$prix',
                            bio = '$bio',
                            imageid = '$imageid',
                            categorie = '$categorie'
        where idc=$idc"; 
$res = mysqli_query($id, $req);
echo mysqli_error($id);
echo"<h3>La voiture $nom a été modifé, vous allez être redirigé </h3>";
header("refresh:3, url=museeadmin.php"); 

?>
<link rel="stylesheet" href="museemenu.css">

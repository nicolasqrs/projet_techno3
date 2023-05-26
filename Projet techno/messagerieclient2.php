<?php
session_start();
if(!isset($_SESSION["mail"])){
    header("location:connexion.php");
}
$id = mysqli_connect("localhost:3307","root","","musee");
$idu=$_SESSION["idu"];
$req = "select * from users where idu ='$idu'";
$res = mysqli_query($id, $req);
$users = mysqli_fetch_assoc($res);
//var_dump($_POST);
 $numed = $_POST["numed"];
$objet = $_POST["objet"];
$probleme = $_POST["message"];
$date = $_POST["date"];
$id = mysqli_connect("localhost:3307","root","","musee");
$req = "INSERT INTO `messages` (`idm`, `auteur`, `texte`, `date`, `objet`) VALUES (NULL, '$numed', '$probleme', '$date', '$objet')"; 
$res = mysqli_query($id, $req);
echo mysqli_error($id);
$mail=$users["mail"];
echo"<h3>Le message a été envoyé</h3>";
header("refresh:3, url=messagerieclient1.php"); 

?>
<link rel="stylesheet" href="museemenu.css">
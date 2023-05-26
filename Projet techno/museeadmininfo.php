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
$idusers=$_GET["numero"];
$rem= "select * from users where idu='$idusers'";
$red= mysqli_query($id, $rem);
$info= mysqli_fetch_assoc($red);
$note= $info["note"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Info utilisateur :</h1>
    <br><br>
    <h2>Nom : <?=$info["nom"]?></h2>
    <h2>Prenom : <?=$info["prenom"]?></h2>
    <h2>Mail : <?=$info["mail"]?></h2>
    <h2>Code Postal : <?=$info["code"]?></h2>
    <br><br>
    <?php if($note==11){
        ?><h2>Pas encore de note donnée au site</h2><?php
    }else{
        ?><h2>Note donnée au site : <?=$note?></h2><?php } 
    ?><br><br>
    <a href='modifmdp1.php?numero=<?=$idusers?>'>Réinitialiser le mot de passe de l'utilisateur</a>
</body>
</html>
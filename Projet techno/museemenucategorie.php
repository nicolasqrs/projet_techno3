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

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
  <div class="logo"><img src="image/logo.jpg" alt="" width="20%" > 
  <div class="deconnexion">
  <a href="connexion.php">Se déconnecter</a>
  <body>
  <?php
        $red="select * from cars order by rand() limit 10";
        $rem = mysqli_query($id, $red);
        while($cars = mysqli_fetch_assoc($rem)){
            $idc=$cars["idc"];
            $image=$cars["imageid"];
            $nom=$cars["nom"];
            $likes=$cars["likes"];
            $qte=$cars["qte"];
            echo "<div class='cars'>
                <a href='museevoiture1.php?numero=".$idc."'><img src='image/$image.jpg' width='500'></a>
                <h3>$nom</h3>
                <h3>$likes likes</h3>
                </div> ";
                if($qte<6){
                    ?><div class="attention"> Plus que <?=$qte?> exemplaire(s)! </div> <?php
                }
        }
    ?>



</body>

</head>
    

</html>
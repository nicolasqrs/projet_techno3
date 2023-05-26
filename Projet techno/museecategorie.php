
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


$categorie=$_GET["categorie"];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="museemenu.css">
</head>
<div class="container">
        <div class="logoconsaut">
        <a href="museemenu.php"><img src="image/logo.png" alt="Cons Auto" width="55"></a>
        </div>
        <div class="texte">
        <h1>CONSERVATOIRE AUTOMOBILE</h1>
       </div>
    <div class="avatarlogox">
    <?php
    
    $avatar= $users['avatar'];
    if($avatar == 'avatar2'){
    echo "<a href='modifcompte1.php?numero=".$_SESSION['idu']."'><img src='image/avatar2.png' width='40'></a>" ;}
    if($avatar =='avatar3'){
        echo "<a href='modifcompte1.php?numero=".$_SESSION['idu']."'><img src='image/avatar3.png' width='40'></a>"; }

    if($avatar =='avatar4'){
        echo "<a href='modifcompte1.php?numero=".$_SESSION['idu']."'><img src='image/avatar4.png' width='40'></a>"; }
    
    if($avatar =='avatar5'){
    echo "<a href='modifcompte1.php?numero=".$_SESSION['idu']."'><img src='image/avatar5.png' width='40'></a>"; }

    if($avatar =='avatar6'){
    echo "<a href='modifcompte1.php?numero=".$_SESSION['idu']."'><img src='image/avatar6.png' width='40'></a>"; }

    if($avatar =='avatar7'){
    echo "<a href='modifcompte1.php?numero=".$_SESSION['idu']."'><img src='image/avatar7.png' width='40'></a>"; }
    
    
    
    
    ?>
</div>
</div>
<br><br>
<body>

    <?php
    $id= mysqli_connect("localhost:3307", "root","","musee");
    $req = "select * from cars
                    where categorie='$categorie'
                    and qte>0";
    $res = mysqli_query($id, $req);
    $compteur = mysqli_num_rows($res);
    if(mysqli_num_rows($res)>0){
    ?>

    <h1>Bienvenue dans la section <?=$categorie?> du musée</h1>
    <h2>Il y a actuellement <?=$compteur?> modèle différent disponible !</h2>
    <?php
    

        while($cars = mysqli_fetch_assoc($res)){
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
                    ?><div class="attention"> Plus que <?=$qte?> exemplaire(s)! </div> <br><?php
                }
        }
    }
    else{
       ?> <h1>Bienvenue dans la section <?=$categorie?> du musée</h1>
       <h2>Il n'y a actuellement aucun modèle disponible !</h2> <?php
    }
    ?>
    <a href="museemenu.php">Retour au menu</a>
</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece</h5>
    </div>
</html>
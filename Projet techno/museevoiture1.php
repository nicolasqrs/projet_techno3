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
$numero=$_GET["numero"];
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
                    where idc='$numero'";
    $res = mysqli_query($id, $req);
    $compteur = mysqli_num_rows($res);
    if(mysqli_num_rows($res)>0){
    ?>

    <h1>Information sur le modèle en question :</h1>
    <?php
    

        while($cars = mysqli_fetch_assoc($res)){
            $idc=$cars["idc"];
            $image=$cars["imageid"];
            $nom=$cars["nom"];
            $modele=$cars["modele"];
            $annee=$cars["annee"];
            $qte=$cars["qte"];
            $likes=$cars["likes"];
            $prix=$cars["prix"];
            $bio=$cars["bio"];
            $categorie=$cars["categorie"];
            ?>
            <a href="museecategorie.php?categorie=<?=$categorie?>">Retour à la page de la catégorie</a><br><br>
            <?php
            echo "<div class='produit'>
                <img src='image/$image.jpg' width='1000'>
                <h3>Nom : $nom</h3>
                <h3>Modèle : $modele</h3>
                <h3>Année : $annee</h3>
                <h3>$bio</h3>
                <h3>Prix : $prix €</h3>
                <h3>Quantité restante : $qte</h3>
                <h3>Likes reçu : $likes</h3>
                </div> ";
        }
    }
    else{
       ?> <h1>Bienvenue dans la section <?=$categorie?> du musée</h1>
       <h2>Il n'y a actuellement aucun modèle disponible !</h2> <?php
    }
    ?>
</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece</h5>
    </div>
</html>
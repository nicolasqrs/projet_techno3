<?php
session_start();
if(!isset($_SESSION["nom"])){
    header("location:connexion.php");
}
$id = mysqli_connect("localhost:3307","root","","musee");
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
        <a href="museeadmin.php"><img src="image/logo.png" alt="Cons Auto" width="55"></a>
        </div>
        <div class="texte">
        <h1>CONSERVATOIRE AUTOMOBILE</h1>
       </div>
    <div class="avatarlogox">
    <?php
    
    echo "<a href='messagerieadmin.php'><img src='image/message.png' width='40'></a>";
    
    ?>
</div>
</div>
<hr>
<br><br>
<body>
<?php
    $id= mysqli_connect("localhost:3307", "root","","musee");
    $req = "select * from users
            where validation='0'";
    $rev = "select * from users
            where validation= '1'
            and niveau= '1'";
    $res = mysqli_query($id, $req);
    $red = mysqli_query($id, $rev);

    if(mysqli_num_rows($res)>0){
        $compteur=mysqli_num_rows($res);
?>
<h1>Bonjour <?=$_SESSION["nom"]?>, Il y a <?php echo "$compteur"?> utilisateur(s) non validé :</h1>

<table>
<div class='tab'><thead></thead><tr><th>#</th><th>Mail</th><th></th><th>Actions</th></tr></thead></div>

<?php

    while($users = mysqli_fetch_assoc($res)){
        
        echo "<tr class='tableau'>
                <td class='tableau'>".$users["idu"]."</td>
                <td class='tableau'>".$users["mail"]."</td>
                <td class='tableau'><a href='museeadmininfo.php?numero=".$users["idu"]."'>Info</a></td>
                <td><a href='modifvalidation.php?numero=".$users["idu"]."'><img src='modifier.png' width='25'></a><a href='modifsuppr.php?numero=".$users["idu"]."'><img src='supprimer.png' width='25'></a></td>
              </tr>";
    }}
    else{
        ?> <h1>Bonjour <?=$_SESSION["nom"]?>, il n'y a pas d'utilisateur a validé.</h1> <?php
    }
    ?></table> <?php
    if(mysqli_num_rows($red)>0){
        $compteur2=mysqli_num_rows($red);
        ?> <h1>Il y a <?php echo "$compteur2" ?> utilisateur(s) validé :</h1> 
        <table>
        <div class='tab'><thead></thead><tr><th>#</th><th>Mail</th><th></th><th>Actions</th></tr></thead></div>
        <?php
        while($users = mysqli_fetch_assoc($red)){
            echo "<tr class='tableau'>
                <td class='tableau'>".$users["idu"]."</td>
                <td class='tableau'>".$users["mail"]."</td>
                <td class='tableau'><a href='museeadmininfo.php?numero=".$users["idu"]."'>Info</a></td>
                <td><a href='modifsuppr.php?numero=".$users["idu"]."'><img src='supprimer.png' width='25'></a></td>
              </tr>";
        }}
    else{
        ?> <h1>Il n'y pas d'utilisateurs dans la base de donnee</h1><?php
    }
    

?>
</table>
<?php
$voitureok="select * from cars where qte>0";
$voiturepasok="select * from cars where qte=0";
$revv = mysqli_query($id, $voitureok);
$remm = mysqli_query($id, $voiturepasok);

    if(mysqli_num_rows($revv)>0){
        $compteur=mysqli_num_rows($revv);
?>
<h1>Il y a <?php echo "$compteur"?> voitures qui sont affiché au publique :</h1>

<table>
<div class='tab'><thead></thead><tr><th>#</th><th>Nom</th><th>Catégorie</th><th>Stock</th><th>Prix</th><th>Likes</th><th></th><th>Actions</th></tr></thead></div>

<?php

    while($voiture = mysqli_fetch_assoc($revv)){
        
        echo "<tr class='tableau'>
                <td class='tableau'>".$voiture["idc"]."</td>
                <td class='tableau'>".$voiture["nom"]."</td>
                <td class='tableau'>".$voiture["categorie"]."</td>
                <td class='tableau'>".$voiture["qte"]."</td>
                <td class='tableau'>".$voiture["prix"]."</td>
                <td class='tableau'>".$voiture["likes"]."</td>
                <td class='tableau'><a href='museeadminmodifvoiture1.php?numero=".$voiture["idc"]."'>Modifier</a></td>
                <td><a href='museeadminmodifvoituresupp.php?numero=".$voiture["idc"]."'><img src='supprimer.png' width='25'></a></td>
              </tr>";
    }
?></table><?php }
    
    else{
        ?> <h1>Il n'y a actuellement aucune voitures visible par le Publique !</h1> <?php
    }
    ?>
    <?php
    if(mysqli_num_rows($remm)>0){
        $compteur=mysqli_num_rows($remm);
?>
<h1>Il y a <?php echo "$compteur"?> voitures qui sont en rupture de stock :</h1>

<table>
<div class='tab'><thead></thead><tr><th>#</th><th>Nom</th><th>Catégorie</th><th>Stock</th><th>Prix</th><th>Likes</th><th></th><th>Actions</th></tr></thead></div>

<?php

    while($voiture = mysqli_fetch_assoc($remm)){
        
        echo "<tr class='tableau'>
                <td class='tableau'>".$voiture["idc"]."</td>
                <td class='tableau'>".$voiture["nom"]."</td>
                <td class='tableau'>".$voiture["categorie"]."</td>
                <td class='tableau'>".$voiture["qte"]."</td>
                <td class='tableau'>".$voiture["prix"]."</td>
                <td class='tableau'>".$voiture["likes"]."</td>
                <td class='tableau'><a href='museeadminmodifvoiture1.php?numero=".$voiture["idc"]."'>Modifier</a></td>
                <td><a href='museeadminmodifvoituresupp.php?numero=".$voiture["idc"]."'><img src='supprimer.png' width='25'></a></td>
              </tr>";
    }
?></table><?php }

    else{
        ?> <h1>Il n'y a actuellement aucune voiture en rupture de stock !</h1> <?php
    }
    ?>

<a href="museeadminajout.php">Ajouter un nouveau Modèle au musée</a>
    


</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece</h5>
    </div>
</html>
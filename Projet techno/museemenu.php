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
    <link rel="stylesheet" href="museemenu.css">
    
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

  <div class="bonjour"><h1>Bonjour <?=$users["prenom"]?>, bienvenue sur CONSAUTO : </h1> <br><br><hr><br>
<form action="museemenuqui.php">
  <input type="submit" value="Qui sommes-nous ?" name="bout">
</form><br>
<form action="museemenudumoment.php">
    <input type="submit" value="Oeuvres du moment" name="bout">
</form><br>

    <hr><br></div>


<div class="categorie"><h1>Nos Catégories :</h1>
    </div>
<div class="lescases">
    <div class="contenuesuper">
    <a href="museecategorie.php?categorie=supercar">
    <img alt="" src="image/supercargif.gif" width = "500" height="400" >
    <div class="texte_super">
    <h1>Supercar</h1>
    </div>
    </a>
    </div>
    <div class="contenueconcept">
    <a href="museecategorie.php?categorie=conceptcar">
    <img alt="" src="image/conceptcargif.gif" width = "500" height="400"><br><br>
    <div class="texte_concept"> 
    <h1>Conceptcar</h1>
    </div>
    </div>
    </a>
    <div class="contenuef1">
    <a href="museecategorie.php?categorie=f1">
    <img alt="" src="image/formule1.gif" width = "500" height="400">
    <div class = "texte_f1">
    <h1>F1</h1>
    </div>
    </div>
    </a>
    <div class="contenuecollec">
    <a href="museecategorie.php?categorie=vintage">
    <img alt="" src="image/collection.gif" width = "500" height="400"><br><br>
    <div class="texte_collec">
    <h1>Collection</h1>
    </div>
    </div>
    </a>
</div>
<h1>Quelques-uns de nos modèles :</h1>
<?php
        $red="select * from cars where qte>0 order by rand() limit 5";
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
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece </h5>
    </div>
</head>
    

</html>
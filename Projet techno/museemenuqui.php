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
    <hr>
    <div class="bonjour">
    <h1>Qui sommes nous ?</h1>
    </div>
    <div class="paragraphe"><h2>L’automobile est un moyen de transport, moyen pratique de se déplacer, elle est rapidement devenue un symbole de liberté et de passion, tandis que les compétitions sous toutes leurs formes suscitent l'intérêt du public celles ayant le plus grand rayonnement à l'échelle de l’Europe étant bien évidemment la Formule 1.

Au fil du temps, des passionnés d'automobiles ont développé leurs collections automobiles parfois ouvertes au public, des associations se sont constituées pour ouvrir des musées, des institutions ont voulu partager leur héritage, et plus récemment les constructeurs ont compris l'importance de mettre en valeur leur histoire. Dommage que les visites guidées traditionnelles fassent peu référence à ces musées, permettant au public de mieux comprendre l'évolution des industries, des modes et des usages de ses machines fascinantes par leurs complexités. Cette tendance est bien réelle comme en témoignent l'affluence des salons et soirées de voitures anciennes, ou le phénomène récent des jeunes qui sont de plus en plus nombreux inscrit au club des adorateurs de mécanique automobile.
Le conservatoire automobile ou plus communément appelé CONSAUTO est un musée de l’automobile créé il y a peu par ses 4 cofondateurs : QUEIROS nicolas, CORREIA William, MORELLI enzo ainsi que Thomas NEVOUX.
Le CONSAUTO ne se limite pas à seulement proposer une multitude de variétés différentes d’automobiles d’exceptions c’est bien plus que ça , c’est avant tout une plateforme où le maître mot qui prône est bien évidemment : “la Passion” et pas n’importe laquelle puisque l’on parle ici de l’automobile.
Ce musée virtuel permet de partager la passion des voitures anciennes, sportives ou encore des concepts innovants. 
L’objectif du site est bien entendu d’être une référence dans le domaine en répertoriant des collections liées à l'automobile de la plus haute qualitées.</h2>
</div><hr>
<div class="bonjour">
    <h1>Mais qu’en est il de la suite ?</h1>
    </div>
    <div class="paragraphe">
<h2>Le site CONSAUTO est en ligne depuis Mai 2023, mais va continuer à se développer dans les mois et années à venir, avec plus de collections de catégories différentes, et en développant des pages, notamment avec plus d'images. Des informations pratiques seront régulièrement mises à jour et des améliorations sont prévues, notamment  une traduction en anglais pour toucher un public au-delà de nos frontières. Plus tard, d'autres outils de communication comme Facebook ou Instagram viendront s'ajouter à la plateforme.</h2>
</div>
<hr>
</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece </h5>
    </div>
</html>
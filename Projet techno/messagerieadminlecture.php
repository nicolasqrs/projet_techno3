<?php
session_start();
if(!isset($_SESSION["mail"])){
    header("location:connexion.php");
}
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
    $idm=$_GET["numero"];
    $req = "select * from messages
                    WHERE idm=$idm";
    $res = mysqli_query($id, $req);
    $messages = mysqli_fetch_assoc($res);
    $auteur=$messages["auteur"];
    $reqq = "select * from users
                    WHERE idu=$auteur";
    $ress = mysqli_query($id, $reqq);
    $utilisateur = mysqli_fetch_assoc($ress);
    $mail=$utilisateur["mail"];
    $date=$messages["date"];
    $objet=$messages["objet"];
    $texte=$messages["texte"];
    ?>
    <h1>Message de <?php echo "$mail" ?></h1>
    <h2>Envoyé le <?=$date?></h2><br>
    <h3>Message : <?=$texte?></h3>
</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece</h5>
    </div>
</html>
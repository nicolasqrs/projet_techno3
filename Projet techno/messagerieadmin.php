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
    $req = "select * from messages";
    $res = mysqli_query($id, $req);
    $compteur = mysqli_num_rows($res);
    if(mysqli_num_rows($res)>0){
    ?>

    <h1>Bonjour <?=$_SESSION["mail"]?>, il y a <?=$compteur?> message(s) !</h1><br>
    <table>
    <tr><th> # </th><th>Objet</th><th>Date</th><th>Auteur</th><th>Action</th><th>Delete</th></tr>
    <?php
    

        while($messages = mysqli_fetch_assoc($res)){
            $idauteur=$messages["auteur"];
            $red="select * from users where idu='$idauteur'";
            $rev = mysqli_query($id, $red);
            $auteur = mysqli_fetch_assoc($rev);

            echo "
                   
                    <tr class='tableau'>
                    <td class='tableau'>".$messages["idm"]."</td>
                    <td class='tableau'>".$messages["objet"]."</td>
                    <td class='tableau'>".$messages["date"]."</td>
                    <td>".$auteur["mail"]."</td>
                    <td><a href='messagerieadminlecture.php?numero=".$messages["idm"]."'>Lire</a></td>
                    <td><a href='messagerieadminsupp.php?numero=".$messages["idm"]."'><img src='supprimer.png' width='25'></a></td>
                    
                  </tr>";
        }
    }
    else{
       ?> <h1>Bonjour <?=$_SESSION["mail"]?>, vous n'avez pas de messages.</h1> <?php
    }
    ?>
</table>
</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece </h5>
    </div>
</html>
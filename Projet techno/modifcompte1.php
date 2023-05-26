<?php
    session_start();
    if(!isset($_SESSION["nom"])){
        header("location:connexion.php");
    }
    $idu=$_SESSION["idu"];
    $id = mysqli_connect("localhost:3307","root","","musee");
        $req = "select * from users
                where idu='$idu'";
        $res = mysqli_query($id, $req);
        if(mysqli_num_rows($res)>0){
            $ligne = mysqli_fetch_assoc($res);
            $idu=$ligne["idu"];
            $nom=$ligne["nom"];
            $prenom=$ligne["prenom"];
            $mail=$ligne["mail"];
            $code=$ligne["code"];
            $avatar=$ligne["avatar"];}
        
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
<body>
    <h1>Page de modification du compte : <?=$_SESSION["mail"]?> </h1>
    <form action="modifcompte2.php" method="post">
        <input type="hidden" name="idu" value="<?=$idu?>">
        <input type="text" name="nom" value="<?=$nom?>" placeholder="Nom" required><br><br>
        <input type="text" name="prenom" value="<?=$prenom?>" placeholder="Prenom"><br><br>
        <input type="text" name="mail" value="<?=$mail?>" placeholder="Mail"><br><br>
        <input type="number" name="code" value="<?=$code?>" placeholder="Code Postal"><br><br>
        Avatar : <br>
        <?php
            if($avatar=='avatar2'){
                ?>
                <div class="avatar">
        
                <input type="radio" name="avatar" value="avatar2" checked>
                <img src="image/avatar2.png" alt="avatar2" width="50">

                <input type="radio" name="avatar" value="avatar3">
                <img src="image/avatar3.png" width="50">

                <input type="radio" name="avatar" value="avatar4">
                <img src="image/avatar4.png" alt="avatar4" width="50">

                <input type="radio" name="avatar" value="avatar5">
                <img src="image/avatar5.png" alt="avatar5" width="50">

                <input type="radio" name="avatar" value="avatar6">
                <img src="image/avatar6.png" alt="avatar6" width="50">

                <input type="radio" name="avatar" value="avatar7">
                <img src="image/avatar7.png" alt="avatar7" width="50">

            </div>
            <?php

            }
        ?>
        <?php
            if($avatar=='avatar3'){
                ?>
                <div class="avatar">
        
                <input type="radio" name="avatar" value="avatar2" >
                <img src="image/avatar2.png" alt="avatar2" width="50">

                <input type="radio" name="avatar" value="avatar3" checked>
                <img src="image/avatar3.png" width="50">

                <input type="radio" name="avatar" value="avatar4">
                <img src="image/avatar4.png" alt="avatar4" width="50">

                <input type="radio" name="avatar" value="avatar5">
                <img src="image/avatar5.png" alt="avatar5" width="50">

                <input type="radio" name="avatar" value="avatar6">
                <img src="image/avatar6.png" alt="avatar6" width="50">

                <input type="radio" name="avatar" value="avatar7">
                <img src="image/avatar7.png" alt="avatar7" width="50">

            </div>
            <?php

            }
        ?>
        <?php
            if($avatar=='avatar4'){
                ?>
                <div class="avatar">
        
                <input type="radio" name="avatar" value="avatar2" >
                <img src="image/avatar2.png" alt="avatar2" width="50">

                <input type="radio" name="avatar" value="avatar3" >
                <img src="image/avatar3.png" width="50">

                <input type="radio" name="avatar" value="avatar4" checked>
                <img src="image/avatar4.png" alt="avatar4" width="50">

                <input type="radio" name="avatar" value="avatar5">
                <img src="image/avatar5.png" alt="avatar5" width="50">

                <input type="radio" name="avatar" value="avatar6">
                <img src="image/avatar6.png" alt="avatar6" width="50">

                <input type="radio" name="avatar" value="avatar7">
                <img src="image/avatar7.png" alt="avatar7" width="50">

            </div>
            <?php

            }
        ?>
        <?php
            if($avatar=='avatar5'){
                ?>
                <div class="avatar">
        
                <input type="radio" name="avatar" value="avatar2" >
                <img src="image/avatar2.png" alt="avatar2" width="50">

                <input type="radio" name="avatar" value="avatar3" >
                <img src="image/avatar3.png" width="50">

                <input type="radio" name="avatar" value="avatar4">
                <img src="image/avatar4.png" alt="avatar4" width="50">

                <input type="radio" name="avatar" value="avatar5" checked>
                <img src="image/avatar5.png" alt="avatar5" width="50">

                <input type="radio" name="avatar" value="avatar6">
                <img src="image/avatar6.png" alt="avatar6" width="50">

                <input type="radio" name="avatar" value="avatar7">
                <img src="image/avatar7.png" alt="avatar7" width="50">

            </div>
            <?php

            }
        ?>
        <?php
            if($avatar=='avatar6'){
                ?>
                <div class="avatar">
        
                <input type="radio" name="avatar" value="avatar2" >
                <img src="image/avatar2.png" alt="avatar2" width="50">

                <input type="radio" name="avatar" value="avatar3" >
                <img src="image/avatar3.png" width="50">

                <input type="radio" name="avatar" value="avatar4">
                <img src="image/avatar4.png" alt="avatar4" width="50">

                <input type="radio" name="avatar" value="avatar5">
                <img src="image/avatar5.png" alt="avatar5" width="50">

                <input type="radio" name="avatar" value="avatar6" checked>
                <img src="image/avatar6.png" alt="avatar6" width="50">

                <input type="radio" name="avatar" value="avatar7">
                <img src="image/avatar7.png" alt="avatar7" width="50">

            </div>
            <?php

            }
        ?>
        <?php
            if($avatar=='avatar7'){
                ?>
                <div class="avatar">
        
                <input type="radio" name="avatar" value="avatar2" >
                <img src="image/avatar2.png" alt="avatar2" width="50">

                <input type="radio" name="avatar" value="avatar3" >
                <img src="image/avatar3.png" width="50">

                <input type="radio" name="avatar" value="avatar4">
                <img src="image/avatar4.png" alt="avatar4" width="50">

                <input type="radio" name="avatar" value="avatar5">
                <img src="image/avatar5.png" alt="avatar5" width="50">

                <input type="radio" name="avatar" value="avatar6">
                <img src="image/avatar6.png" alt="avatar6" width="50">

                <input type="radio" name="avatar" value="avatar7" checked>
                <img src="image/avatar7.png" alt="avatar7" width="50">

            </div>
            <?php

            }
        ?>
        
        <br>
        <input type="submit" value="Modifier" name="bout">
        
        




    </form>
    <br><br>
    <a href="modifmdpclient1.php?numero=<?=$idu?>">Modifier le mot de Passe</a><br>
    <a href="modifnote1.php?numero=<?=$idu?>">Modifier la note</a><br><br>
    <a href="messagerieclient1.php">Nous envoyer un message</a>
    <a href="connexion.php">Deconnexion</a>
</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece </h5>
    </div>
</html>
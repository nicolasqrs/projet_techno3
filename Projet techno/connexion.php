<?php
session_start();
$id = mysqli_connect("localhost:3307","root","","musee");
if(isset($_POST["bout"])){
    $mail = $_POST["mail"];
    $mdp = $_POST["mdp"];
    $req = "select * from users
            where mail='$mail'
            and validation='1'
            and mdp='$mdp'";
    $rev = "select * from users
            where mail='$mail'
            and validation='0'
            and mdp='$mdp'";
    $res = mysqli_query($id, $req);
    $rem = mysqli_query($id, $rev);
    if(mysqli_num_rows($res)>0){
        $ligne = mysqli_fetch_assoc($res);
        $_SESSION["idu"] = $ligne["idu"];
        $_SESSION["nom"] = $ligne["nom"];
        $_SESSION["niveau"] = $ligne["niveau"];
        $_SESSION["mail"] = $mail;
        $_SESSION["avatar"] = $ligne["avatar"];
        if($_SESSION["niveau"]==2){
        header("location:museeadmin.php");
        }else header("location:museemenu.php");
        
    }elseif(mysqli_num_rows($rem)>0) 
    {header("location:erreurvalidation.php");}
    else{
    header("location:erreurconnexion.php");}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion musée</title>
    <link rel="stylesheet" href="museemenu.css">
</head>
<body>
<h1>Connexion</h1><hr>
    <form action="" method="post">
        Entrez votre mail : <br>
        <input type="email" name="mail"><br>
        Entrez votre mot de passe : <br>
        <input type="password" name="mdp"><br>
        <input type="submit" value=" Se connecter" name="bout"><br>
        <a href="creeruncompte.php">Creer un compte</a>
    </form>
</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece</h5>
    </div>
</html>
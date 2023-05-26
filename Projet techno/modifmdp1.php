<?php
 $id = mysqli_connect("localhost:3307","root","","musee");
 $numed = $_GET["numero"];  
 $req = "select * from users where idu=$numed"; 
 $res = mysqli_query($id, $req);
 $ligne = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Réinitialiser le mot de passe de l'utilisateur <?=$ligne['mail']?></h1><hr>
    <form action="modifmdp2.php" method="post">
        <input type="hidden" name="numed" value="<?=$numed?>">
        <input type="password" name="mdp" placeholder="Nouveau mot de passe"><br><br>
        <input type="submit" value="Ajouter" name="bout">




    </form>
</body>
</html>
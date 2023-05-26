<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
$conn = mysqli_connect("localhost:3307","root","","musee");
    if(isset($_POST["bout"])){
        
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $mdp = $_POST["mdp"];
        $cp = $_POST["cp"];
        $niveau = 1;
        $avatar = $_POST["avatar"];
        $req1 = "select * from users where mail='$mail'";
        $res1 = mysqli_query($conn, $req1);
        if(mysqli_num_rows($res1)){
        echo "Un compte existe deja avec cette adresse mail";
        }else {
        $req = "insert into users values (null, '$nom', '$prenom', '$mail', '$mdp', '$cp', '$niveau', '$avatar', '0', '11')";
        mysqli_query($conn, $req);
        echo "Nous vous comfirmons la création de votre compte, vous pouvez maintenant vous connecter";
        header("refresh:3, url=connexion.php"); 
        }
        
    }
?>
</body>
</html>
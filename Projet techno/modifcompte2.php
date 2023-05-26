<?php

//var_dump($_POST);
 $numed = $_POST["idu"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$code = $_POST["code"];
$avatar = $_POST["avatar"];
$id = mysqli_connect("localhost:3307","root","","musee");
$req = "update users set nom = '$nom',
                            prenom = '$prenom',
                            mail = '$mail',
                            code = '$code',
                            avatar = '$avatar'
        where idu=$numed"; 
$res = mysqli_query($id, $req);
echo mysqli_error($id);
echo"<h3>L'utilisateur $mail a été modifé, vous allez être redirigé </h3>";
header("refresh:3, url=modifcompte1.php"); 

?>
<link rel="stylesheet" href="museemenu.css">
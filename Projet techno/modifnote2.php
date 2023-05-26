<?php
 $numed = $_POST["numed"];
$note = $_POST["note"];
$id = mysqli_connect("localhost:3307","root","","musee");
$red = "select * from users
            WHERE idu='$numed'"; 
$res = mysqli_query($id, $red);

$req = "update users set note = '$note'
        where idu='$numed'";
        $rev = mysqli_query($id, $req);
        echo"<h3>La note de l'utilisateur a été modifé, vous allez être redirigé</h3>";
        header("refresh:3, url=modifcompte1.php");   
?>
<link rel="stylesheet" href="museemenu.css">
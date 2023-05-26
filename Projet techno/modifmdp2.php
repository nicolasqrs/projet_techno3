<?php
 $numed = $_POST["numed"];
$mdp = $_POST["mdp"];
$id = mysqli_connect("localhost:3307","root","","musee");
$req = "update users set mdp = '$mdp'
        where idu=$numed"; 
$res = mysqli_query($id, $req);
echo mysqli_error($id);
echo"<h3>Le mot de passe de l'utilisateur a été modifé, vous allez être redirigé vers la liste</h3>";
header("refresh:3, url=museeadmin.php"); 

?>
<link rel="stylesheet" href="museemenu.css">
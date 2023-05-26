<?php
 $numed = $_POST["numed"];
$oldmdp = $_POST["oldmdp"];
$mdp = $_POST["mdp"];
$id = mysqli_connect("localhost:3307","root","","musee");
$red = "select * from users
            WHERE idu='$numed'
            AND mdp='$oldmdp'"; 
$res = mysqli_query($id, $red);
if(mysqli_num_rows($res)>0){
    $req = "update users set mdp = '$mdp'
        where idu='$numed'";
        $rev = mysqli_query($id, $req);
        echo"<h3>Le mot de passe de l'utilisateur a été modifé, vous allez être redirigé</h3>";
        header("refresh:3, url=modifcompte1.php");   
}
else{
//echo mysqli_error($id);
echo"<h3>Le mot de passe actuel est erroné, redirection</h3>";
header("refresh:3, url=modifcompte1.php"); 
}
?>
<link rel="stylesheet" href="museemenu.css">
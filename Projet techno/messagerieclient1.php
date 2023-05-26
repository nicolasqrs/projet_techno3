<?php
session_start();
if(!isset($_SESSION["mail"])){
    header("location:connexion.php");
}
$id = mysqli_connect("localhost:3307","root","","musee");
$idu=$_SESSION["idu"];
$req = "select * from users where idu ='$idu'";
$res = mysqli_query($id, $req);
$users = mysqli_fetch_assoc($res);
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
    
    $avatar= $users['avatar'];
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
<br><br>
<body>
    <?php
        $date = date('y-m-d h:i:s');
    ?>
    <h1>Vous pouvez ici envoyer un  Message à L'Admin !</h1> <br>
    <form action="messagerieclient2.php" method="post">
        <input type="hidden" name="numed" value="<?=$users["idu"]?>">
        <input type="hidden" name="date" value="<?=$date?>">
        <input type="text" name="objet" placeholder="Objet" required><br><br>
        <input Class="objet" type="text" name="message" placeholder="Ecrire ici..."><br><br>
        </select><br>
        <input type="submit" value="Envoyer" name="bout">
    </form>
</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece</h5>
    </div>
</html>
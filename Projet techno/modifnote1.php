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
    
    $avatar= $ligne['avatar'];
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
    <h1>Modification de votre note :</h1><hr>
    <form action="modifnote2.php" method="post">
        <input type="hidden" name="numed" value="<?=$numed?>" >
        <?php
            if($ligne["note"]==11){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5" checked>
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==0){
        ?>
        0<input type="radio" name="note" id="note" value="0" checked>
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5">
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==1){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1" checked>
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5">
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==2){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2" checked>
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5">
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==3){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3" checked>
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5">
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==4){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4" checked>
        5<input type="radio" name="note" id="note" value="5">
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==5){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5" checked>
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==6){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5">
        6<input type="radio" name="note" id="note" value="6" checked>
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==7){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5">
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7" checked>
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==8){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5">
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8" checked>
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==9){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5">
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9" checked>
        10<input type="radio" name="note" id="note" value="10">
        <?php
        }
        if($ligne["note"]==10){
        ?>
        0<input type="radio" name="note" id="note" value="0">
        1<input type="radio" name="note" id="note" value="1">
        2<input type="radio" name="note" id="note" value="2">
        3<input type="radio" name="note" id="note" value="3">
        4<input type="radio" name="note" id="note" value="4">
        5<input type="radio" name="note" id="note" value="5">
        6<input type="radio" name="note" id="note" value="6">
        7<input type="radio" name="note" id="note" value="7">
        8<input type="radio" name="note" id="note" value="8">
        9<input type="radio" name="note" id="note" value="9">
        10<input type="radio" name="note" id="note" value="10" checked>
        <?php
        }
        ?>
        <input type="submit" value="Envoyer" name="bout">




    </form>
    <hr>
</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece </h5>
    </div>
</html>
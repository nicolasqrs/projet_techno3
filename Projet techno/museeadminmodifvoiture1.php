<?php
    session_start();
    if(!isset($_SESSION["nom"])){
        header("location:connexion.php");
    }
    $idc=$_GET["numero"];
    $id = mysqli_connect("localhost:3307","root","","musee");
        $req = "select * from cars
                where idc='$idc'";
        $res = mysqli_query($id, $req);
        if(mysqli_num_rows($res)>0){
            $voiture = mysqli_fetch_assoc($res);
            $idc=$voiture["idc"];
            $marque=$voiture["marque"];
            $modele=$voiture["modele"];
            $annee=$voiture["annee"];
            $qte=$voiture["qte"];
            $likes=$voiture["likes"];
            $prix=$voiture["prix"];
            $bio=$voiture["bio"];
            $nom=$voiture["nom"];
            $categorie=$voiture["categorie"];
            $imageid=$voiture["imageid"];
            }
        
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
        <a href="museeadmin.php"><img src="image/logo.png" alt="Cons Auto" width="55"></a>
        </div>
        <div class="texte">
        <h1>CONSERVATOIRE AUTOMOBILE</h1>
       </div>
    <div class="avatarlogox">
    <?php
    
    echo "<a href='messagerieadmin.php'><img src='image/message.png' width='40'></a>";
    
    ?>
</div>
</div>
<hr>
<br><br>
<body>
<h1>Page de modification de la <?=$nom?> :</h1>
    <form action="museeadminmodifvoiture2.php" method="post">
        <input type="hidden" name="idc" value="<?=$idc?>">
        Marque : <input type="text" name="marque" value="<?=$marque?>" placeholder="Marque" required><br><br>
        Modèle : <input type="text" name="modele" value="<?=$modele?>" placeholder="Modele" required><br><br>
        Année : <input type="number" min='0' name="annee" value="<?=$annee?>" placeholder="Année" required><br><br>
        Stock : <input type="number" min='0' name="qte" value="<?=$qte?>" placeholder="Stock" required><br><br>
        Likes : <input type="number" min='0' name="likes" value="<?=$likes?>" placeholder="Likes" required><br><br>
        Prix : <input type="number" min='0' name="prix" value="<?=$prix?>" placeholder="Prix" required>€<br><br>
        Biographie :<input type="text" name="bio" value="<?=$bio?>" placeholder="Biographie" required><br><br>
        Nom : <input type="text" name="nom" value="<?=$nom?>" placeholder="Nom" required><br><br>
        ImageID :<input type="text" name="imageid" value="<?=$imageid?>" placeholder="Image ID"><br><br>
        <?php
            if($categorie=='supercar'){
        ?>
        <select name="categorie" id="categorie">
            <option value="supercar">Super Car</option>
            <option value="conceptcar">Concept Car</option>
            <option value="f1">Formule 1</option>
            <option value="vintage">Voiture Vintage</option>
        </select>
        <?php } ?>
        <?php
            if($categorie=='conceptcar'){
        ?>
        <select name="categorie" id="categorie">
            <option value="conceptcar">Concept Car</option>
            <option value="supercar">Super Car</option>
            <option value="f1">Formule 1</option>
            <option value="vintage">Voiture Vintage</option>
        </select>
        <?php } ?>
        <?php
            if($categorie=='f1'){
        ?>
        <select name="categorie" id="categorie">
            <option value="f1">Formule 1</option>
            <option value="conceptcar">Concept Car</option>
            <option value="supercar">Super Car</option>
            <option value="vintage">Voiture Vintage</option>
        </select>
        <?php } ?>
        <?php
            if($categorie=='vintage'){
        ?>
        <select name="categorie" id="categorie">
            <option value="vintage">Voiture Vintage</option>
            <option value="conceptcar">Concept Car</option>
            <option value="supercar">Super Car</option>
            <option value="f1">Formule 1</option>
        </select>
        <?php } ?>
        <br><br><br>
        <input type="submit" value="Modifier" name="bout">
        </form>
</body>
<div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece</h5>
    </div>
</html>
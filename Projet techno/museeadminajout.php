<link rel="stylesheet" href="museemenu.css">
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
<h1>Vous pouvez ici ajouter un voiture au musée !</h1> <br>
    <form action="museeadminajout2.php" method="post">
        Marque : <input type="text" name="marque" placeholder="Marque" required><br><br>
        Modèle : <input type="text" name="modele" placeholder="Modele" required><br><br>
        Année : <input type="number" min='0' name="annee" placeholder="Année" required><br><br>
        Stock : <input type="number" min='0' name="qte" placeholder="Stock" required><br><br>
        Likes : <input type="number" min='0' name="likes" placeholder="Likes" required><br><br>
        Prix : <input type="number" min='0' name="prix" placeholder="Prix" required>€<br><br>
        Biographie :<input type="text" name="bio" placeholder="Biographie" required><br><br>
        Nom : <input type="text" name="nom" placeholder="Nom" required><br><br>
        ImageID :<input type="text" name="imageid" placeholder="Image ID"><br><br>
        <select name="categorie" id="categorie">
            <option value="supercar">Super Car</option>
            <option value="conceptcar">Concept Car</option>
            <option value="f1">Formule 1</option>
            <option value="vintage">Voiture Vintage</option>
        </select>
        <input type="submit" value="Ajouter" name="bout">
    </form>
    <div class="footer">
       <h5> Tous droits réservés © Cons Auto, Paris | 2023 </h5>  
        <h5>thomas.nevoux@edu.ece.fr | nicolas.queiros@edu.ece.fr | william.correia@edu.ece.fr | enzo.morelli@edu.ece</h5>
    </div>
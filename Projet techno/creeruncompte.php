<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation compte</title>
    <link rel="stylesheet" href="musee.css">
</head>
<body>
    <h1>Creation de votre compte:</h1><hr>
 <form action="recupclient.php" method="post">
    Civilité : <br>
    <select name="civilite" id="civilite">
        <option value="Homme">Homme</option>
        <option value="Femme">Femme</option>
    </select><br> 
    Avatar : <br>
    <div class="avatar">
        
    <input type="radio" name="avatar" value="avatar2" checked>
    <img src="image/avatar2.png" alt="avatar2" width="50">

    <input type="radio" name="avatar" value="avatar3">
    <img src="image/avatar3.png" width="50">

    <input type="radio" name="avatar" value="avatar4">
    <img src="image/avatar4.png" alt="avatar4" width="50">

    <input type="radio" name="avatar" value="avatar5">
    <img src="image/avatar5.png" alt="avatar5" width="50">

    <input type="radio" name="avatar" value="avatar6">
    <img src="image/avatar6.png" alt="avatar6" width="50">

    <input type="radio" name="avatar" value="avatar7">
    <img src="image/avatar7.png" alt="avatar7" width="50">

    </div>
    Nom :  <br>
    <input type="text" name="nom" required><br>
    Prénom : <br>
    <input type="text" name="prenom" required><br>
    Mail: <br>
    <input type="email" name="mail" placeholder="                                      @gmail.com" required><br>
    Mot de Passe: <br>
    <input type="password" name="mdp"required><br>
    Code Postal : <br>
    <input type="number" name="cp" required><br>
    <input type="submit" value="Creer mon compte" name="bout"><br>
    <a href="connexion.php">J'ai déja un compte</a>

 </form>

</body>
</html>
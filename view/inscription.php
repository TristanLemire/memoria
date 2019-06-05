<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Memoria</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <script defer src="../assets/js/custom.js"></script>
</head>
<body>
  <h1>Inscription</h1>
  <form action="./controller/register.php" method="post">
    <label for="pseudo">Pseudo:</label>
    <input type="text" name="pseudo" id="pseudo">
    <label for="mail">Mail:</label>
    <input type="email" name="mail" id="mail">
    <label for="mdp">Mot de passe:</label>
    <input type="password" name="mdp" id="mdp">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom">
    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" id="prenom">
    <label for="image">Photo de profil:</label>
    <input type="file" name="image" id="image">
    <input type="submit" value="Inscription" name="inscription">
    <a href="./index.php">Connexion</a>
  </form>
</body>
</html>
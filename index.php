<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Memoria</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <script defer src="./assets/js/custom.js"></script>
</head>
<body>
  <h1>Welcome to Memoria</h1>
  <form action="./controller/connect.php" method="post">
    <label for="pseudo">Pseudo:</label>
    <input type="text" name="pseudo" id="pseudo">
    <label for="mdp">Mot de passe:</label>
    <input type="password" name="mdp" id="mdp">
    <input type="submit" value="Connexion" name="connexion">
    <a href="./view/inscription.php">Inscription</a>
  </form>
</body>
</html>

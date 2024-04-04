<!DOCTYPE html>
<html>
<head>
<style>
body {
font-family: Arial, sans-serif;
background-color: #E1EEFF;
}
label {
  display: inline-block;
  width: 140px;
  text-align: right;
}
input {
  width: 200px;
  margin: .5em;
}
</style>
</head>
<body>

<h2>VISITEUR</h2>
<form id="formulaireVisiteur" method="GET" action="">
  <label for="id">Identifiant:</label><input type="text" id="id" name="identifi" value=""><br>
  <label for="nom">Nom:</label><input type="text" id="nom" name="nom" value=""><br>
  <label for="prenom">Prenom:</label><input type="text" id="prenom" name="prenom" value=""><br>
  <label for="adresse">Adresse:</label><input type="text" id="adresse" name="adresse" value=""><br>
  <label for="ville">Ville:</label><input type="text" id="ville" name="ville" value=""><br>
  <label for="cp">CP:</label><input type="text" id="cp" name="cp" value=""><br>
  <label for="date">Date embauche:</label><input type="text" id="date" name="date1" value=""><br>
  <label for="login">login:</label><input type="text" id="login" name="login" value=""><br>
  <label for="mdp">mdp:</label><input type="password" id="mdp" name="mdp"><br>
  <button type="submit" name="action1" value="ajouter">Ajouter</button>
  <button type="submit" name="action1" value="modifier">Modifier</button>
  <button type="reset" id="reinitialiser">Réinitialiser</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Vérifier quelle action est demandée (ajouter ou modifier)
    if (isset($_GET["action1"])) {
        if ($_GET["action1"] == "ajouter") {
            include("ajouter_user.php");
        } elseif ($_GET["action1"] == "modifier") {
            include("modifier_user.php");
        }
    }
}
?>

</body>
</html>

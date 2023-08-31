<!-- Projet : Module de Connexion
Description : Créez un module de connexion simple qui permet aux utilisateurs de se
connecter avec un nom d'utilisateur et un mot de passe. Si les informations sont correctes,
l'utilisateur est redirigé vers une page de bienvenue. Sinon, un message d'erreur est affiché.
Sur la page bienvenue, il faut ajouter un bouton de déconnexion.
Pages du projet :
index.php : Page de connexion où les utilisateurs saisissent leurs informations.
bienvenue.php : Page de bienvenue affichée après une connexion réussie. Si l’utilisateur
n’est pas connecter, il ne doit pas avoir accès à cette page.
styles.css : Fichier CSS pour la mise en forme.
Objectifs :
 Créer un formulaire de connexion avec des champs pour le nom d'utilisateur et le
mot de passe.
 Valider les informations soumises par l'utilisateur.
 Utiliser un tableau associatif pour stocker les informations de connexion (simulées
ici).
 Rediriger l'utilisateur vers la page de bienvenue en cas de succès.
 la connexion doit être stocké dans une session ou un cookie
 La page bienvenue n’est pas accessible si l’utilisateur n’est pas connecté.
 Afficher un message d'erreur en cas d'échec. -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['msg_erreur'])) {
    echo $_SESSION['msg_erreur'];
    unset($_SESSION['msg_erreur']);
}
?>

<form method="post" action="bienvenue.php">
    <label for="username">Nom d'utilisateur:</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Mot de passe:</label><br>
    <input type="password" id="password" name="password"><br>
    <input type="submit" value="Connexion">
</form>



</body>
</html>
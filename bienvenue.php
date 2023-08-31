
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$tabc = [
    [
        "utilisateur" => "moi",
        "password" => "admin",
    ], 
];


    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == $tabc[0]["utilisateur"] && $password == $tabc[0]["password"]) {
        echo "Bienvenue " . $username;
        setcookie("username", $username, time() + 3600,);
        
    } else {
        session_start();
        $_SESSION['msg_erreur'] = "Pas les bons identifiants !";
        header("Location: index.php");
    }
    
    
    
    if (isset($_POST['deconnexion'])) {
        setcookie("username", $username, time() - 3600,);
        echo "Vous êtes déconnecté";
    }
    
    ?>

<form method="post" action="index.php">
    <input type="submit" value="deconnexion">
</form>

</body>
</html>





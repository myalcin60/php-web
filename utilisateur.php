<?php
// demarree la session
 session_start();  

 // var_dump($_SERVER);
//   'REQUEST_METHOD' => string 'GET' (length=3)
//   'HTTP_REFERER' => string 'http://localhost/php-web/' (length=25)



$username = "Doe";
if ($_REQUEST['username'] != "") {
    $username = $_REQUEST['username'];
   $username=strtoupper($username[0]).substr($username,1);
};

$age = $_REQUEST['age'];
$ville = $_REQUEST['ville'];

$genre='Madame ';
 if(isset($_REQUEST['genre']) and $_REQUEST['genre']=='homme'){
  $genre='Monsieur ' ; 
 };
// ajouter un cookie
setcookie("nom", $username);

// ajouter des données dans la session
$_SESSION['nom'] = $username;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'utilisatuer</title>
</head>

<body>
    <h1>
        Gestion d'utilisatuer
    </h1>
    <p>
        Bonjour 
        <?php
        echo "$genre $username, vous avez $age ans et êtes de $ville";
        ?>
        <a href="test.php">Consulter les cookies et les session</a>
    </p>

   
</body>

</html>
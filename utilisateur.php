<?php
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
    </p>
</body>

</html>
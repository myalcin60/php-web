<?php
$username = "Doe";
if ($_POST['username'] != "") {
    $username = $_POST['username'];
   $username=strtoupper($username[0]).substr($username,1);
}
$lastname = "Doe";
if ($_POST['username'] != "") {
    $lastname = $_POST['lastname'];
   $lastname=strtoupper($lastname);
}
$age = $_POST['age'];
$ville = $_POST['ville'];

$genre='Madame ';
 if(isset($_POST['genre']) and $_POST['genre']=='homme'){
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
        echo "$genre $username, $lastname vous avez $age ans et êtes de $ville";
        ?>
    </p>
</body>

</html>
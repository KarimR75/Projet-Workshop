<?php
$user ='root';
$pws ='';

try
{
    $bdd = new PDO('mysql: host=localhost;dbname=jeux_video', $user, $pws);
    echo '<h1>connecter</h1>';
    return $bdd;
}

catch (PDOException $e)
{
    die('Erreur de connexion :' .$e->getMessage());
}

?>
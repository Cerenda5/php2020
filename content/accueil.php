<?php

session_start();

if (!isset($_SESSION['connecte'])){
    header('Location: ../index.php');
}

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

$query = $bdd->prepare('SELECT * FROM annonce');
$query->execute();
$annonces = $query->fetchAll(PDO::FETCH_ASSOC);
?>

    <p><a href="disconnect.php">Se déconnecter</a></p>
    <p><a href="createAnnonce.php">Créer des annonces</a></p>

<?php

foreach ($annonces as $annonce){
    echo '<br>_____<br>';
    include 'annonceLinkTemplate.php';
    echo '<br>_____<br>';
}

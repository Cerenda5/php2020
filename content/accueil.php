<?php

session_start();

if (!isset($_SESSION['connecte'])) {
    header('Location: ../index.php');
}

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

$query = $bdd->prepare('SELECT * FROM annonce');
$query->execute();
$annonces = $query->fetchAll(PDO::FETCH_ASSOC);

include 'nav.php';

echo '<main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">';

foreach ($annonces as $annonce) {
    include 'annonceLinkTemplate.php';
}
echo '</div>
            </div>
        </div>
    </main>';



<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=php_project','root');
}catch(PDOException $e){
    die('Erreur : '.$e->getMessage());
}

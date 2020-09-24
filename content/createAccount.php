<?php

session_start();

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

if (isset($_POST['createAccount'])) {
    if (isset($_POST['login']) AND isset($_POST['mail']) AND isset($_POST['password']) AND isset($_POST['verif']) AND isset($_POST['description'])) {
        if (!empty($_POST['login']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['verif'])) {
            $login = trim(htmlspecialchars($_POST['login']));
            $mail = trim(htmlspecialchars($_POST['mail']));
            $password = sha1($_POST['password']);
            $verif = sha1($_POST['verif']);
            $description = trim(htmlspecialchars($_POST['description']));
            //$date = new DateTime();

            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                if ($password == $verif) {
                    $req = $bdd->prepare("INSERT INTO `user`(login, password, email, description) VALUES ('$login', '$password', '$mail', '$description')");
                    $req->execute(array($login, $password, $mail, $description));

                } else {
                    echo $error = "Les mots de passes ne correspondent pas.";
                }
            } else {
                echo $error = "Adresse email invalide";
            }
        } else {
            echo $error = "Un ou plusieurs champs n'ont pas été remplis.";
        }
    }
}




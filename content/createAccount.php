<?php

session_start();

require(__DIR__ . DIRECTORY_SEPARATOR . 'bdd.php');

$mailpattern = '#[A-z]@[A-z].[A-z]{2}[A-z]?$#';
if (isset($_POST['createAccount'])) {
    if (isset($_POST['login']) && isset($_POST['mail']) && isset($_POST['password']) && isset($_POST['verif']) && isset($_POST['description'])) {
        if (!empty($_POST['login']) AND !empty($_POST['mail']) AND !empty($_POST['password']) AND !empty($_POST['verif']) AND !empty($_POST['phonenumber'])) {
            $login = trim(htmlspecialchars($_POST['login']));
            $mail = trim(htmlspecialchars($_POST['mail']));
            $password = sha1($_POST['password']);
            $phonenumber = $_POST['phonenumber'];
            $verif = sha1($_POST['verif']);
            $description = trim(htmlspecialchars($_POST['description']));
            //$date = new DateTime();


            if (preg_match($mailpattern, $mail) === 1) {
                var_dump($mail);
                if ($password == $verif) {
                    $req = $bdd->prepare("INSERT INTO user(login, password, email, phonenumber, description) VALUES ('$login', '$password', '$mail', '$phonenumber', '$description')");
                    $req->execute(array($login, $password, $mail, $phonenumber, $description));

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
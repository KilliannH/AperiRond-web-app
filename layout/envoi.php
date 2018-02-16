<?php

//Fonction qui ce connecte à la BDD
function connectionBDD() {

    $host = '127.0.0.1';
    $port = '3306';
    $db = 'aperirond';
    $login = 'root';
    $password = 'root';

    try {

        $pdo = new PDO('mysql:host='.$host.';port='.$port. ';dbname='.$db, $login, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo("bd connected");

    } catch (PDOException $e) {

        var_dump($e->getMessage());

    }
    return $pdo;
}

//Fonction qui permer de vérifier que les cases ne sont pas vide
function testEmpty() {

    //Si les ou une case sont/ou est vide redirige vers la page login
    if(empty($_POST['email']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['mdp']) || empty($_POST['mdp']) || empty($_POST['numRue']) || empty($_POST['nomRue']) || empty($_POST['cdp']) || empty($_POST['ville']) || empty($_POST['pays'])) {

        header('location: login.php');
        die;
    }

    else {
        //Si la condition est validé, appel de la fonction qui permet d'avoir un nombre de cacractére minimum dans chaque champ
        longueurInscript();
    }
}

//Fonction qui permet d'avoir un nombre de caractére minimum dans chaque champ
function longueurInscript() {
    //Regarde vérifie le nombre de caractére dans chaque case
    if (strlen($_POST['email']) >= 4 && strlen($_POST['nom']) >= 4 && strlen($_POST['prenom']) >= 4 && strlen($_POST['mdpConfirm']) >= 4 && strlen($_POST['nomRue']) >= 4 && strlen($_POST['nom']) >= 2 && strlen($_POST['ville']) >= 3) {
        //Si la condition est validé, il appel la fonction qui va vérifier les mots de passes
        verifMdp();
    }
    else {
        //Si il y a une erreur, redirection vers la page login.php
        header('location: login.php');
        die;

    }
}

//Fonction qui permet de voir si les deux champs des mots de passes sont identiques
function verifMdp() {
    //Vérifie que les deux champs sont identiques
    if ($_POST['mdp'] != $_POST['mdpConfirm']) {
        header('location: login.php');
        die;
    } else {
        //Appel la fonction d'inscription en lui passant le mail en paramétre
        inscription($_POST['email']);
    }
}


//Fonction qui permet d'inscrire l'utilisateur dans la BDD
function inscription($mail) {

    //Extrait de tout les post
    extract($_POST);

    //Permet d'ajouter des dans antislahs dans une chaîne
    $email = addslashes($email);
    $nom = addslashes($nom);
    $prenom = addslashes($prenom);
    $mdp = addslashes($mdp);
    $numRue = addslashes($numRue);
    $nomRue = addslashes($nomRue);
    $cdp = addslashes($cdp);
    $ville = addslashes($ville);
    $pays = addslashes($pays);

    $pdo = connectionBDD();

    try {

        //Requête SQL pour récupérer les adresses mails dans la BDD
        $rows = $pdo->query("SELECT mail FROM user WHERE mail ='".$mail."'");
        $row = $rows->fetch();

        //Si le mail est différent que les autres enregistrés dans la BDD
        if ($row['mail'] != $mail) {
            echo "inscrit";
            //L'utilisateur est inscrit
            $pdo->exec("INSERT INTO `user` (mail, nom, prenom, mdp, numRue, nomRue, codePostal, ville, pays) VALUES ('$email', '$nom', '$prenom','$mdp','$numRue', '$nomRue', '$cdp', '$ville', '$pays')");
            header('location: login.php');
        } else {
            echo "Pas inscrit";
        }

    }
        //Si il y a des erreurs, ils les attrappent et les affichent
    catch (PDOException $e) {
        var_dump($e);
        //Ferme la BDD
    } finally {
        $pdo = null;
    }
}

//Appel de la première fonction qui appelera les autres si les conditions sont remplies, sinon erreurs
testEmpty();

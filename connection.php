<?php
//Permet de démarrer une nouvelle 
session_start();

//Fonction qui ce connecte à la BDD
function connectionBDD() {

	$host = '127.0.0.1'; 
	$port = '3306';
	$db = 'aperirond_db';
	$login = 'root';
	$password = 'root';

	try {
	    
	    $pdo = new PDO('mysql:host='.$host.';port='.$port. ';dbname='.$db, $login, $password);
	    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $e) {
	    
	    var_dump($e->getMessage()); 

	} 
	 return $pdo;
}


//Fonction qui permer de vérifier que les cases ne sont pas vide/
function testEmpty() {

	if(empty($_POST['emailCo']) || empty($_POST['mdpCo'])) {
		
		header('location: /layout/login.php');
		die;
		}
	else {
		//Appel de la fonction bddEmail et en lui passant l'email entreer, et le mdp
		bddEmail(($_POST['emailCo']),($_POST['mdpCo']));
	}
}


//Fonction qui autorise ou nn les connection
function bddEmail($mail, $mdp) {


	$pdo  = connectionBDD();

try {
	
	//Requête SQL qui va chercher le mail et le mdp dans la BDD
	$rows = $pdo->query("SELECT mail, mdp FROM user WHERE mail ='".$mail."'");
	$row = $rows->fetch();

	//Condition qui vérifie que le mail entrer existe ou pas dans la BDD
	if ($row['mail'] != $mail) {
		header('location: ../index.php');
		die;
	}

		//Condition qui vérifie que le mot de passe entrer correspond à celui dans la BDD
		if ($row['mdp'] === $mdp) {
	 		echo "Ok";	

	 	}
	 	else {
	 		header('location: /layout/login.php');
	 		die;
	 	} 	
	
//Si il y a des erreurs, ils les attrappent et les affichent
} catch (PDOException $e) {
	    var_dump($e);
 		
	//Ferme la BDD
	} finally {
	    $pdo = null;
	}

}

//Appel la fonction qui appel les autres si les conditions sont respectés
testEmpty();

?>

<p><a href="/logout.php">Déconnection</a></p>
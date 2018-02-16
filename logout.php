<?php   
//Permet de déconnecter de son compte
session_start();
session_destroy(); 
header("location: /index.php");
exit();
?>
<?php include 'layout/header.php'?>
<?php include './pdo.php';

function modifStock(&$pdo){
    $pdo->query('SELECT stock FROM Aperi_Rond');

}








include 'layout/footer.php'?>

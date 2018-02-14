<?php include './pdo.php';

function modifStock(&$pdo)
{
    $variete = 'variété';
    $disponibilite = 'disponibilité';
    $qte = $_POST('qte');

    $stk = $pdo->query('SELECT variété, disponibilité FROM aperirond');
    while ($stk->fetch()) {
        if ($variete($stk > $qte)) {
            $TTstk = $variete($stk - $qte);
            try {
                $pdo->exec("INSERT INTO `aperirond` (disponibilité) VALUES ('$disponibilite')");
            } catch (PDOException $e) {

            }
            return $TTstk;
        } else if ($variete($stk < $qte)) {
           echo("Désolée, mais vous ne pouvez plus ajouter d'éléments de cette variété ... Stock insuffisant");
        }
        else if($variete($stk = 0)){
            echo ("plus de stocks disponible");
        }

    }
}


function calculPrix(&$pdo){
    $variete = 'variété';
    $prix = 'prix';
    $qte = $_POST('qte');
    $prix = $pdo->query('SELECT variété, prix FROM aperirond');

    while ($prix->fetch()) {
        $ttPrix = $variete($prix * $qte);
        echo("Prix total de la commande : . $ttPrix");
        return $ttPrix;
    }
}



function systemePaiement(){
    $champ1 = $_POST('champ1');
    $champ2 = $_POST('champ2');
    $champ3 = $_POST('champ3');
    $champ4 = $_POST('champ4');

    $champSpé = $_POST('champSpé');

    if((!empty($champ1) || !empty($champ2) || !empty($champ3) || !empty($champ4) || !empty($champSpé))
        && (strlen($champ1 != 4) || strlen($champ2 != 4) || strlen($champ3 != 4) ||
            strlen($champ4 != 4) || strlen($champSpé != 3))){
        header('libs/envoi.php');
    }
}











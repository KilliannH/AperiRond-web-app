<?php include 'layout/header.php'?>
<?php include 'pdo.php';


/**
 * @param $pdo  ######################### Fonctions affichages des variétés de la BDD pour visu page vitrine #############################
 */

/// getters here //////
///

function getNbCommande(&$pdo) {

$variete = [];

$i = 0;

    $quantiteHasChanged = $pdo->query('SELECT variete FROM aperirond WHERE disponibilite!=1000');
    while($row = $quantiteHasChanged->fetch()) {
        $variete[$i] = $row['variete'];
        $i++;
    }
    return $i;
}
function getVariete(&$pdo) {

    $variete = [];

    $i = 0;

    $quantiteHasChanged = $pdo->query('SELECT variete FROM aperirond WHERE disponibilite!=1000');
    while($row = $quantiteHasChanged->fetch()) {
        $variete[$i] =$row['variete'];
        $i++;
    }

    return $variete;
}


function getQuantite(&$pdo) {

    $disponibilite = [];

    $i = 0;

    $quantiteHasChanged = $pdo->query('SELECT disponibilite FROM aperirond WHERE disponibilite!=1000');
    while($row = $quantiteHasChanged->fetch()) {
        $disponibilite[$i] =1000 - (int)$row['disponibilite'];
        $i++;
    }

    return $disponibilite;
}


function getPrix(&$pdo) {

    $prix = [];

    $i = 0;

    $quantiteHasChanged = $pdo->query('SELECT prix FROM aperirond WHERE disponibilite!=1000');
    while($row = $quantiteHasChanged->fetch()) {
        $prix[$i] =$row['prix'];
        $i++;
    }

    return $prix;
}

function getImageUrl(&$pdo) {

    $img_url = [];

    $i = 0;

    $quantiteHasChanged = $pdo->query('SELECT image_url FROM aperirond WHERE disponibilite!=1000');
    while($row = $quantiteHasChanged->fetch()) {
        $img_url[$i] =$row['image_url'];
        $i++;
    }

    return $img_url;
}


function PrintVarietyNutella(&$pdo){
    $rows = $pdo->query('SELECT * FROM aperirond WHERE variete="nutella"');
//    while($row = $rows->fetch(PDO::FETCH_ASSOC)) {
    while($row = $rows->fetch()) {
        echo $row['id']."<br>";
        echo $row['variete']."<br>";
        echo $row['disponibilite']."<br>";
        echo $row['prix']."<br>";
    }

    echo 'test réussi';
}
function PrintVarietySiropErable(&$pdo){
    $rows = $pdo->query('SELECT * FROM aperirond WHERE variete="siroperable"');
//    while($row = $rows->fetch(PDO::FETCH_ASSOC)) {
    while($row = $rows->fetch()) {
        var_dump($row);
    }

    echo 'test réussi';
}
function PrintVarietyFraise(&$pdo){
    $rows = $pdo->query('SELECT * FROM aperirond WHERE variete="fraise"');
//    while($row = $rows->fetch(PDO::FETCH_ASSOC)) {
    while($row = $rows->fetch()) {
        var_dump($row);
    }

    echo 'test réussi';
}
function PrintVarietyCactus(&$pdo){
    $rows = $pdo->query('SELECT * FROM aperirond WHERE variete="cactus"');
//    while($row = $rows->fetch(PDO::FETCH_ASSOC)) {
    while($row = $rows->fetch()) {
        var_dump($row);
    }

    echo 'test réussi';
}
function PrintVarietyVegan(&$pdo){
    $rows = $pdo->query('SELECT * FROM aperirond WHERE variete="vegan"');
//    while($row = $rows->fetch(PDO::FETCH_ASSOC)) {
    while($row = $rows->fetch()) {
        var_dump($row);
    }

    echo 'test réussi';
}
function PrintVarietyMaryjane(&$pdo){

    $rows = $pdo->query("SELECT variete,disponibilite,prix FROM aperirond WHERE variete='maryjane'");
//    while($row = $rows->fetch(PDO::FETCH_ASSOC)) {
    while($row = $rows->fetch()) {
        var_dump($row);
    }

    echo 'test réussi';
}




/*if(!empty($_POST['qtenutella'])){
    $Nutella=$_POST['qtenutella'];
    panier($pdo,$Nutella);
}*/

/*function idNutella(&$pdo){
    $rows=$pdo->query('SELECT id FROM aperirond WHERE variete="nutella"');
    while($row = $rows->fetch()) {
        var_dump($row);
        var_dump($row['id']);
        $rowf=$row['id'];
        return $rowf;
    }
}
function idFraise(&$pdo){
    $rows=$pdo->query('SELECT ID FROM aperirond WHERE variete="fraise"');
    while($row = $rows->fetch()) {
        var_dump($row);
        $rowf=$row['id'];
        return $rowf;
    }
}
function idSiropErable(&$pdo){
    $rows=$pdo->query('SELECT ID FROM aperirond WHERE variete="siroperable"');
    while($row = $rows->fetch()) {
        var_dump($row);
        $rowf=$row['id'];
        return $rowf;
    }
}
function idCactus(&$pdo){
    $rows=$pdo->query('SELECT ID FROM aperirond WHERE variete="cactus"');
    while($row = $rows->fetch()) {
        var_dump($row);
        $rowf=$row['id'];
        return $rowf;
    }
}
function idVegan(&$pdo){
    $rows=$pdo->query('SELECT ID FROM aperirond WHERE variete="vegan"');
    while($row = $rows->fetch()) {
        var_dump($row);
        $rowf=$row['id'];
        return $rowf;
    }
}
function idMaryjane(&$pdo){
    $rows=$pdo->query('SELECT ID FROM aperirond WHERE variete="maryjane"');
    while($row = $rows->fetch()) {
        var_dump($row);
        $rowf=$row['id'];
        return $rowf;
    }
}

/*$nutellaIsChecked = false;
$fraiseIsChecked = false;
$siropIsChecked = false;
$cactusIsChecked = false;
$veganIsChecked = false;
$mjIsChecked = false;


$allIsChecked = false;
while(!$allIsChecked) {
    if (!empty($_POST['qtenutella']) && !$nutellaIsChecked) {

        $id = idNutella($pdo);
        echo modifStock($pdo, $_POST['qtenutella'], $id);
        $nutellaIsChecked = true;
    } if (!empty($_POST['qtefraise']) && !$fraiseIsChecked) {

        $id = idFraise($pdo);
        echo modifStock($pdo, $_POST['qtefraise'], $id);
        $fraiseIsChecked = true;
    } if (!empty($_POST['qtesiroperable']) && !$siropIsChecked ) {

        $id = idSiropErable($pdo);
        echo modifStock($pdo, $_POST['qtesiroperable'], $id);
        $siropIsChecked = true;
    } if (!empty($_POST['qtecactus']) && !$cactusIsChecked) {

        $id = idCactus($pdo);
        echo modifStock($pdo, $_POST['qtecactus'], $id);
        $cactusIsChecked = true;
    } if (!empty($_POST['qtevegan']) && !$veganIsChecked) {

        $id = idVegan($pdo);
        echo modifStock($pdo, $_POST['qtevegan'], $id);
        $veganIsChecked =true;
    } if (!empty($_POST['qtemaryjane']) && !$mjIsChecked) {

        $id = idMaryjane($pdo);
        echo modifStock($pdo, $_POST['qtemaryjane'], $id);
        $mjIsChecked = true;}

}*/
/**
 * ##################  Conditions pour récupérer les valeurs des formulaires  ##############################"""
 * ############## panier ##################"
 */
$acc=0;

    if (!empty($_POST['qtenutella'])) {


        modifStock($pdo, $_POST['qtenutella'], 1);
        calculPrix($pdo, $_POST['qtenutella'], $acc ,1);
    }

    if (!empty($_POST['qtefraise'])) {

        //$id = idFraise($pdo);
        modifStock($pdo, $_POST['qtefraise'], 2);
        calculPrix($pdo, $_POST['qtefraise'], $acc, 2);
    }

    if (!empty($_POST['qtesiroperable'])) {

        //$id = idSiropErable($pdo);
        modifStock($pdo, $_POST['qtesiroperable'], 3);
        calculPrix($pdo, $_POST['qtesiroperable'], $acc, 3);
    }

    if (!empty($_POST['qtecactus'])) {

        //$id = idCactus($pdo);
        modifStock($pdo, $_POST['qtecactus'], 4);
        calculPrix($pdo, $_POST['qtecactus'], $acc, 4);


    }
    if (!empty($_POST['qtevegan'])) {

        //$id = idVegan($pdo);
        modifStock($pdo, $_POST['qtevegan'], 5);
        calculPrix($pdo, $_POST['qtevegan'], $acc,5);

    }
    if (!empty($_POST['qtemaryjane'])) {

        //$id = idMaryjane($pdo);
        modifStock($pdo, $_POST['qtemaryjane'], 6);
        echo calculPrix($pdo, $_POST['qtemaryjane'], $acc, 6);
    }
        //echo calculPrix($pdo, 0,$acc, 6); //////////////////// ligne à gérer


/**
 * @param $pdo
 * @param $qte
 * @param $paraId
 * @return string
 * ####################################  Fonction de modification du stock  --   appelée dans les conditions précédentes ##########################"
 */

function modifStock(&$pdo, $qte, $paraId)
{

    $rows = $pdo->query('SELECT id, disponibilite FROM aperirond WHERE id='.$paraId);
    while ($row = $rows->fetch()) {
        $row['id'];
        $stk = $row['disponibilite'];
        if ($stk > $qte) {
            $TTstk = $stk - $qte;
            try {
                $pdo->exec("UPDATE `aperirond` SET disponibilite = '$TTstk' WHERE id=$paraId");
                header("location: /layout/panier.php");
            } catch (PDOException $e) {

            }
            return $TTstk;

        } else if ($stk < $qte) {
            return 'Désolée, Stock insuffisant pour ce produit, vous pouvez seulement en commander ' . $stk . ' maximum';
            //header( 'Location: ../index.php');
        }
        else if($stk = 0){
            return "Désolée, ce produit a été victime de son succès";
        }

    }

}

/**
 * @param $pdo
 * @param $qte
 * @param $acc
 * @param $paraId
 * @return string
 * ##################################" FOnction de calcul du prix par variété et prix total #######################
 */
function calculPrixNutella($qte){

    $nutella = 5.29;

    return $qte * $nutella;
    }

function calculPrixCactus($qte){

    $cactus  = 2.99;

    return $qte * $cactus;
    }

function calculFraise($qte){

    $fraise = 3.99;

    return $qte * $fraise;
    }


function calculPrixSiropErable($qte){

    $siroperable = 4.99;

    return $qte * $siroperable;
    }

function calculPrixVegan($qte){

    $vegan = 6.99;

    return $qte * $vegan;
    }

function calculMJ($qte){

    $maryjane = 14.99;

    return $qte * $maryjane;
    }


include 'layout/footer.php'?>


<?php include 'header.php'?>
<?php include 'navbar.php'?>
<?php include '../script.php'?>

<!-- Initialisateur pour remplir les tableaux -->

<?php $listVariete = getVariete($pdo);
$listQuantite = getQuantite($pdo);
$listPrix = getPrix($pdo);
$listImg_url = getImageUrl($pdo);

$nbCommande = getNbCommande($pdo);
?>

    <div class="container font_panier">
        <div class="row">
        <!-- Three columns of text below the carousel -->
            <div class="col-md-3 variété_panier">
                <p>Votre produit</p>
            </div>

            <div class="col-md-3 variété_panier">
                <p>Variété</p>
            </div><!-- /.col-lg-3 -->

            <div class="col-md-2 quantité_panier panier_img_alligned">
                <p>Quantité variété</p>
            </div><!-- /.col-md-2 -->

            <div class="col-md-2 prix_panier panier_img_alligned">
                <p>Prix (unité)</p>
            </div><!-- /.col-md-2 -->

            <div class="col-md-2 total_panier panier_img_alligned">
                <p>Total</p>
            </div><!-- /.col-md-2 -->

        </div> <!-- end of row here -->
    </div>

        <?php for($i = 0; $i < $nbCommande; $i++) {?>

        <div class="row">
        <div class="col-md-3 variété_result panier_img_container">
            <img class="panier_img" src="../<?php echo $listImg_url[$i] ?>"/>
        </div>
            <div class="col-md-3 variété_panier">
                <p><?php echo $listVariete[$i] ?></p>
            </div><!-- /.col-lg-3 -->

            <div class="col-md-2 quantité_panier panier_img_alligned">
                <p><?php echo $listQuantite[$i] ?></p>
            </div><!-- /.col-md-2 -->

            <div class="col-md-2 prix_panier panier_img_alligned">
                <p><?php echo $listPrix[$i] ?></p>
            </div><!-- /.col-md-2 -->

            <div class="col-md-2 total_panier panier_img_alligned">
                <p><?php echo (float)$listPrix[$i] * (float)$listQuantite[$i]?></p>
            </div><!-- /.col-md-2 -->

    <div class="col-md-12">
            <hr>
    </div>

        </div> <!-- end of row here --> <?php } ?>

    </div><!-- end of container -->


<?php include 'footer.php'?>
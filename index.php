<?php include 'layout/header.php'?>
<?php include 'layout/navbar.php'?>
<?php include 'script.php'?>
<?php include 'pdo.php'?>

<section id="cover">
 <!-- image du début -->
</section>

<div class="container">
    <form action="index.php" method="post">

    <div class="col-md-12 variété_headers"><h1>Nos chouettes recettes !</h1><hr></div>
    <div class="row products_collection">
        <div class="col-lg-4">
          <img class="rounded-circle" src="/libs/details_img/siroperable.jpg" alt="Generic placeholder image" width="260px" height="260px">
          <h2 class="variété_title">Sirop d'érable</h2>
            <p class="products_prix">4.99 € (unité)</p>
            <p class="form-group">Quantité
                <input type="text" name="qtesiroperable" value="0" class="form-control">
            </p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
            <img class="rounded-circle" src="/libs/details_img/nutella.jpg" alt="Generic placeholder image" width="260px" height="260px">
            <h2 class="variété_title">Nutella</h2>
            <p class="products_prix">5.29 € (unité)</p>
            <p class="form-group">Quantité
                <input type="text" name="qtenutella" value="0" class="form-control">
            </p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
            <img class="rounded-circle" src="/libs/details_img/fraise.jpg" alt="Generic placeholder image" width="260px" height="260px">
            <h2 class="variété_title">Fraise</h2>
            <p class="products_prix">3.99 € (unité)</p>
            <p class="form-group">Quantité
                <input type="text" name="qtefraise" value="0" class="form-control">
            </p>
        </div><!-- /.col-lg-4 -->
    </div><!-- end of raw -->

    <div class="row products_spaced">
        <div class="col-lg-4">
            <img class="rounded-circle" src="/libs/details_img/cactus.jpg" alt="Generic placeholder image" width="260px" height="260px">
            <h2 class="variété_title">Cactus</h2>
            <p class="products_prix">2.99 € (unité)</p>
            <p class="form-group">Quantité
                <input type="text" name="qtecactus" value="0" class="form-control">
            </p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
            <img class="rounded-circle" src="/libs/details_img/vegan.jpg" width="260px" height="260px">
            <h2 class="variété_title">Vegan</h2>
            <p class="products_prix">6.99 € (unité)</p>
            <p class="form-group">Quantité
                <input type="text" name="qtevegan" value="0" class="form-control">
            </p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
            <img class="rounded-circle" src="/libs/details_img/chanvre.jpg" alt="Generic placeholder image" width="260px" height="260px">
            <h2 class="variété_title">Marie Jeanne</h2>
            <p class="products_prix">14.99 € (unité)</p>
            <p class="form-group">Quantité
                <input type="text" name="qtemaryjane" value="0" class="form-control">
            </p>
        </div><!-- /.col-lg-4 -->
    </div><!-- end of raw -->

    <div class="row products_spaced">
        <div class="col-md-12 panier_button">
        <button class="btn btn-primary btn-lg" type="submit">Ajouter au panier</button>
        </div>
    </div>
    </form>

</div><!-- end of container -->


<?php include 'layout/footer.php'?>
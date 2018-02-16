<?php
session_start();
include 'navbar.php';
include  'header.php';
include  'footer.php';
?>

<div class="container">
        <form action="../connection.php" method="post">
            <div class="row">
                <div class="col-md-12 login_spaced">

                    <input type="email" class="form-control" placeholder="Email" name="emailCo">
                    <input type="password" class="form-control" placeholder="Votre mot de passe" name="mdpCo">
                </div>
            </div>

                <div class="row">
                    <div class="col-md-12 button1_spaced">
                    <button class="btn btn-primary" action="submit">Connectez-vous</button>
                    </div>
                </div>

        </form>

    <hr>

    <div class="col-md-12 inscription_spaced">
        <form action="envoi.php" method="post">
            <div class="row">
                <div class="col-md-12 inscription_spaced">

                    <input type="email" class="form-control" name ="email"  placeholder="Email">
                    <input type="text" class="form-control"  name="nom" placeholder="Votre nom">
                    <input type="text" class="form-control" name="prenom" placeholder="Votre prenom">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 inscription_spaced">

        <input type="password" class="form-control" name="mdp"  placeholder="Votre mot de passe">
        <input type="password" class="form-control" name="mdpConfirm"  placeholder="Votre mot de passe">
        <input type="text" 	class="form-control" name="numRue" placeholder="Numéro de votre rue">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 inscription_spaced">
        <input type="text" class="form-control"	 name="nomRue" placeholder="Nom de votre rue">
        <input type="number" class="form-control" name="cdp" placeholder="Votre code postale">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 inscription_spaced">
        <input type="text" class="form-control"	 name="ville" placeholder="Nom de votre ville">
        <input type="text" class="form-control"	 name="pays" placeholder="Votre pays">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 button2_spaced">
                    <button class="btn btn-primary" action="submit">Inscrivez-vous</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-12 inscription_spaced">
    </div>
</div>

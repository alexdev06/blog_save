<div class="page-title">
    <h2><?= $title ?></h2>
    <hr class="star-primary">
</div>
<?php
if ($visitor->hasFlash()) {
    ?>
    <p class="flash"> <?= $visitor->getFlash(); ?> </p>
    <?php
}
?>  
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <p>L'accès à l'interface d'adminstration du site est réservé aux utilisateurs inscrits et validés.</p>
        </div>
    </div>
    <div class="row">
        <h3 class="col-lg-8 col-lg-offset-2 text-center">Veuillez entrer votre identifiant et votre mot de passe :</h3>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <form action="" method="post">
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Login</label>
                        <input type="text" name="login" class="form-control" placeholder="Login" id="login" required data-validation-required-message="Entrez votre login.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Mot de passe</label>
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" id="password" required data-validation-required-message="Entrez votre mot de passe.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br />
                <div class="row form-group">
                    <div class="form-group col-xs-4">
                        <div class="g-recaptcha" data-sitekey="6LehGMAUAAAAAAu-G1BzjkHTyWssiMYxtuL--4bm"></div>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                    <div class="form-group col-xs-6">
                        <button type="submit" class="btn btn-success btn-lg">Se connecter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--
    <form  action="" method="post">
        <div class="row form-group">
            <label class="col-xs-4 col-xs-offset-4" for="login">Pseudo :</label><br />
            <input class="col-xs-4 col-xs-offset-4" type="text" id="login" name="login" />
        </div>
        <div class="row form-group">
            <label class="col-xs-4 col-xs-offset-4" for="password">Mot de passe :</label><br />
            <input class="col-xs-4 col-xs-offset-4" type="password" id="password" name="password" /><br />
        </div>
        
        <div class="row form-group">
            <div class="form-group col-xs-4 col-xs-offset-4">
                <div class="g-recaptcha" data-sitekey="6LehGMAUAAAAAAu-G1BzjkHTyWssiMYxtuL--4bm"></div>
            </div>
        </div>
        <div class="row form-group">
            <input class="btn btn-success btn-md col-xs-6 col-xs-offset-3 col-sm-2 col-sm-offset-3 " type="submit" value="Connexion" />
            <input class="btn btn-success btn-md col-xs-6 col-xs-offset-3 col-sm-2 col-sm-offset-2" type="reset" value="Réinitialiser" />
        </div>
    </form>-->

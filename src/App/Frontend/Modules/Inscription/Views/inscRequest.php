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
        <div class="col-lg-12">  
            <p class="lead">Vous souhaitez contribuer activement à la vie du blog? Poster des news et valider les commentaires?  Pour celà, remplissez le formulaire d'inscription et votre candidature sera étudiée avec le plus grand soin.</p>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-lg-12">
            <form action="" method="post">
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Prénom</label>
                        <input type="text" name="name" class="form-control" placeholder="Prénom" id="name" required data-validation-required-message="Entrez votre prénom.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Nom</label>
                        <input type="text" name="lastName" class="form-control" placeholder="Nom" id="lastName" required data-validation-required-message="Entrez votre nom.">
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Adresse email</label>
                        <input type="email" name="email" class="form-control" placeholder="Adresse email" id="email" required data-validation-required-message="Entrez votre adresse email.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
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
                <div class="row control-group">
                    <div class="form-group col-xs-12 floating-label-form-group controls">
                        <label>Confirmez le mot de passe</label>
                        <input type="password" name="passCheck" class="form-control" placeholder="Confirmer le mot de passe" id="passCheck" required data-validation-required-message="Confirmez votre mot de passe.">
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
                        <button type="submit" class="btn btn-success btn-lg" onclick="return confirm('Valider votre choix?');" >Envoyer</button>
                    </div>
                    <div class="form-group col-xs-6">
                        <button type="reset" class="btn btn-success btn-lg">Réinitialiser</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

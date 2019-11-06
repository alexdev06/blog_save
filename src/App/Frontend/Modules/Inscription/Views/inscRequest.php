<h2 class="titrepage">Inscription</h2>
<?php
if ($visitor->hasFlash()) {
    ?>
    <p class="flash"> <?= $visitor->getFlash(); ?> </p>
    <?php
}
?>

        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form action="" method="post" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nom</label>
                            <input type="text" name="lastName" class="form-control" placeholder="Nom" id="lastName" required data-validation-required-message="Entrez votre nom.">
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Prénom</label>
                            <input type="text" name="name" class="form-control" placeholder="Prénom" id="name" required data-validation-required-message="Entrez votre prénom.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Adresse mail</label>
                            <input type="email" name="email" class="form-control" placeholder="Adresse mail" id="email" required data-validation-required-message="Entrez votre adresse email.">
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
<!--    
<div class="col-xs-12 col-sm-8 col-lg6">
<form action="" method="post">
    <div class="form-group">
        <label for="name">Prénom :</label><br />
        <input type="text" id="name" name="name" class="form-control"/><br />
    </div>
    <div class="form-group">
        <label for="last_name">Nom :</label><br />
        <input type="text" id="last_name" name="last_name" class="form-control" /><br />
    </div>
    <div class="form-group">
        <label for="username">Pseudo :</label><br />
        <input type="text" id="username" name="username" class="form-control" /><br />
    </div>
    <div class="form-group">
        <label for="email">Email :</label><br />
        <input type="email" id="email" name="email"  class="form-control"/><br />
    </div>
    <div class="form-group">
        <label for="password">Mot de passe :</label><br />
        <input type="password" id="password" name="password" class="form-control" /><br />
    </div>
    
    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="6LehGMAUAAAAAAu-G1BzjkHTyWssiMYxtuL--4bm
        "></div>
    </div>
    <div class="form-group">
        <input class="btn btn-success btn-lg" type="submit" value="Envoyer"  onclick="return confirm('Valider votre choix?');" />
        <input class="btn btn-success btn-lg" type="reset" value="Réinitialiser">
    </div>
    
</form>
</div>-->
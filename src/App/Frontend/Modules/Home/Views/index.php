<?php
if ($visitor->hasFlash()) {
    ?>
    <p class="flash"> <?= $visitor->getFlash(); ?> </p>
    <?php
}
?>
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="img/profile.png" alt="">
                <div class="intro-text">
                    <span class="name">Alexandre Manteaux</span>
                    <hr class="star-light">
                    <span class="skills">Web Developper</span>
                </div>
            </div>
        </div>
    </div>
</header> 

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Me contacter</h2>
                <hr class="star-primary">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <p class="lead">Vous souhaitez me contacter? Remplissez le formulaire ci-dessous et je vous répondrai dans les meilleurs délais.</p>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="post">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Prénom</label>
                            <input type="text" name="name" class="form-control" placeholder="Prénom" id="name" required data-validation-required-message="Veuillez entrer votre nom.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nom</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Nom" id="last_name" required data-validation-required-message="Veuillez entrer votre prénom.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Adresse email</label>
                            <input type="email" name="email" class="form-control" placeholder="Adresse email" id="email" required data-validation-required-message="Veuillez entrer votre email.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" name="message" placeholder="Message" id="message" required data-validation-required-message="Veuillez entrer un message."></textarea>
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
</section>
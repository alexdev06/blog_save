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
                    <span class="name">Start Bootstrap</span>
                    <hr class="star-light">
                    <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
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
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form action="" method="post" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nom</label>
                            <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Prénom</label>
                            <input type="text" class="form-control" placeholder="Prénom" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Adresse mail</label>
                            <input type="email" class="form-control" placeholder="Adresse mail" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Téléphone</label>
                            <input type="tel" class="form-control" placeholder="Téléphone" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
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
<div class="page-title">
    <h2><?= $title ?></h2>
    <hr class="star-primary">
</div>

<div class="row">
    <div class="col-lg-8 col-lg-offset-2">  
        <p class="lead">Pour ajouter un commentaire à l'article, saisissez votre pseudo et votre message. Les commentaires sont soumis à validation et ne seront donc publiés qu'après validation par un administrateur du site.</p>
    </div>
</div>
<br/>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <form action="" method="post">
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Pseudo</label>
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" id="pseudo" required data-validation-required-message="Entrez votre pseudo.">
                </div>
            </div>
            <div class="row control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Commentaire</label>
                    <textarea rows="5" name="message" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Entrez votre commentaire."></textarea>
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
</div>
</div>
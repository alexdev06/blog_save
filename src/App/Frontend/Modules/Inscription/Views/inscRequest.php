<h2 class="titrepage">Formulaire d'inscription</h2>
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
    <!--
    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="6LehGMAUAAAAAAu-G1BzjkHTyWssiMYxtuL--4bm
        "></div>
    </div>-->
    <div class="form-group">
        <input class="btn btn-success btn-lg" type="submit" value="Envoyer"  onclick="return confirm('Valider votre choix?');" />
        <input class="btn btn-success btn-lg" type="reset" value="Réinitialiser">
    </div>
    
</form>
</div>
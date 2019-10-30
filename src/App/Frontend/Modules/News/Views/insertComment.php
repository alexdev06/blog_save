<form action="" method="post">
    <div class="form-group">
        <label for="pseudo">Pseudo :</label><br />
        <input class="form-control" type="text" name="pseudo" id="pseudo" /><br />
    </div>    
    <div class="form-group">
        <label for="message">Commentaire :</label><br />
        <textarea class="form-control" name="message" id="message" rows="7" cols="50"></textarea><br />
    </div>
    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="6LehGMAUAAAAAAu-G1BzjkHTyWssiMYxtuL--4bm"></div>
        </div>
    <div class="form-group">
        <input class="btn btn-success btn-lg" type="submit" value="Commenter" />
        <input  class="btn btn-success btn-lg" type="reset" value="Réinitialiser" />
    </div>
    </form>
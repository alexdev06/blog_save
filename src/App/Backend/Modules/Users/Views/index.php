<h2 style="text-align: center"><?= $title ?></h2>
<table class="table table-striped mt5">
<thead class="thead-dark">
<tr><th>Prénom</th><th>Nom</th><th>Nom d'utilisateur</th><th>Email</th></tr>
    </thead>
<?php
foreach ($listeUsers as $user)
{
  echo '<tr><td>', $user['name'], '</td><td>', $user['last_name'], '</td><td>', $user['username'],'</td><td>', $user['email'],'</td></tr>', "\n";
}
?>
</table>



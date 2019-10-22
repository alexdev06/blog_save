<h2 style="text-align: center">Interface d'administration</h2>
<h3>Ajouter une news</h3>
<p><a href="/admin-news-insert.html">Ajouter une news</a></p>
<h3>Liste des news</h3>
<p style="text-align: center">Il y a actuellement <?= $nombreNews ?> news :</p>

<table class="table table-striped">
  <thead class="thead-dark">
    <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th></tr>
  </thead>
<?php
foreach ($listeNews as $news)
{
  echo '<tr><td>', $news['author'], '</td><td>', $news['title'], '</td><td>le ', $news['date_create']->format('d/m/Y à H\hi'), '</td><td>', ($news['date_create'] == $news['date_uptdate'] ? '-' : 'le '.$news['date_update']->format('d/m/Y à H\hi')), '</td><td><a href="admin-news-update-', $news['id'], '.html">Modifier</a><br /> <a href="admin-news-delete-', $news['id'], '.html">Supprimer</a><br /> <a href="news-', $news['id'], '.html">Consulter</a></td></tr>', "\n";
}
?>
</table>

<h3>Commentaires en attente de validation</h3>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr><th>Auteur</th><th>Contenu</th><th>Date d'ajout</th><th>Action</th></tr>
  </thead>

<?php
foreach ($comments as $comment)
{
  echo '<tr><td>', $comment['author'], '</td><td>', $comment['content'], '</td><td>le ', $comment['date_create']->format('d/m/Y à H\hi'), '</td><td><a href="admin-comments-validate-', $comment['id'], '.html">Valider</a><br /> <a href="admin-comments-delete-', $comment['id'], '.html">Supprimer</a></td></tr>', "\n";
}
?>
</table>

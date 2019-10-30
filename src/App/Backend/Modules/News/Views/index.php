<h2 class="titrepage">News</h2>

<p style="margin-bottom: 50px; font-weight: bold">Il y a actuellement <?= $nombreNews ?> news :</p>

<table id="usetTable" class="table">
  <thead class="thead-dark">
    <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th></tr>
  </thead>
<?php
foreach ($listeNews as $news)
{
  echo '<tr><td>', $news['author'], '</td><td>', nl2br(htmlspecialchars($news['title'])), '</td><td>le ', $news['date_create']->format('d/m/Y à H\hi'), '</td><td>', ($news['date_create'] == $news['date_uptdate'] ? '-' : 'le '.$news['date_update']->format('d/m/Y à H\hi')), '</td><td><a href="admin-news-update-', $news['id'], '.html">Modifier</a><br /> <a href="admin-news-delete-', $news['id'], '.html" onclick="return confirm(\'Valider votre choix?\');"">Supprimer</a><br /> <a href="news-', $news['id'], '.html">Consulter</a><br /><a href="admin-comments-news-', $news['id'], '.html">Commentaires</a></td></tr>', "\n";
}
?>
</table>

<h2 class="titrepage">Commentaires</h2>
<table id="usetTable" class="table">
  <thead>
    <tr>
        <th>Auteur</th>
        <th>News_id</th>
        <th>Contenu</th>
        <th>Date d'ajout</th>
        <th>Statut</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($comments as $comment)
{
    if ($comment['published'] == 1) {
        $comment['published'] = 'publié';
    } else {
        $comment['published'] = 'masqué';
    }
    echo '<tr><td>', $comment['author'], '</td><td>', $comment['news_id'], '</td><td>', $comment['content'], '</td><td>le ', $comment['date_create']->format('d/m/Y à H\hi'), '</td><td>' . $comment['published'] . '</td><td><a href="admin-comments-update-', $comment['id'], '.html">Modifier</a><br /> <a onclick="return confirm(\'Valider votre choix?\');" href="admin-comments-delete-', $comment['id'], '.html ">Supprimer</a></td></tr>', "\n";
}
?>
  </tbody>
</table>
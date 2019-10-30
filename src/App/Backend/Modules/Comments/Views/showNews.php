<h2 class="titrepage">Commentaires de la news</h2>
<table id="usetTable" class="table">
<thead>
    <tr>
        <th>Auteur</th>
        <th>Contenu</th>
        <th>Date d'ajout</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($comments as $comment)
{
  echo '<tr><td>', $comment['author'], '</td><td>', nl2br(htmlspecialchars($comment['content'])), '</td><td>le ', $comment['date_create']->format('d/m/Y à H\hi'), '</td><td><a href="admin-comments-validate-', $comment['id'], '.html">Valider</a><br /> <a href="admin-comments-delete-', $comment['id'], '.html">Supprimer</a></td></tr>', "\n";
}
?>
</tbody>
</table>
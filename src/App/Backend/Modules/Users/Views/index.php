<h2 class="titrepage"><?= $title ?></h2>
<table id="usetTable" class="table">
<thead class="thead-dark">
    <tr>    
        <th>Prénom</th>
        <th>Nom</th>
        <th>Nom d'utilisateur</th>
        <th>Email</th>
        <th>Membre</th>
        <th>Action</th>
    </tr>
</thead>
</tbody>
<?php
foreach ($listeUsers as $user)
{
    if ($user['member_status'] == 1) {
        $user['member_status'] = 'validé';
    } else {
        $user['member_status'] = 'en attente';
    }
    echo '<tr><td>', $user['name'], '</td><td>', $user['last_name'], '</td><td>', $user['username'],'</td><td>', $user['email'],'</td><td>', $user['member_status'], '</td><td><a href="admin-users-update-', $user['id'], '.html">Modifier</a><br /> <a href="admin-users-delete-', $user['id'], '.html" onclick="return confirm(\'Valider votre choix ?\');">Supprimer</a></td></tr>', "\n";
}
?>
</tbody>
</table>



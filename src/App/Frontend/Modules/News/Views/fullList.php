<h2 class="titrepage"><?= $title ?></h2>

<?php
foreach ($listeNews as $news) {
    ?>

    <h3><a href="news-<?= $news['id'] ?>.html"><?= $news['title'] ?></a></h3>
    <p style="text-align: left;"><small><em>Modifiée le <?= $news['date_update']->format('d/m/Y à H\hi') ?></em></small></p>
    
    <p><?= nl2br($news['content']) ?> <a href="news-<?= $news['id'] ?>.html">lire la suite</a></p>
    
    <?php
}
?>
<h2 class="titrepage"><?= $title ?></h2>
<?php
foreach ($listeNews as $news) {
    ?>

    <h3><a href="news-<?= $news['id'] ?>"><?= htmlspecialchars($news['title']) ?></a></h3>
    <p style="text-align: left;"><small><em>Modifiée le <?= $news['date_update']->format('d/m/Y à H\hi') ?></em></small></p>
    
    <p><?= nl2br(htmlspecialchars($news['content'])) ?> <a href="news-<?= $news['id'] ?>">lire la suite</a></p>
    
    <?php
}
?>
<section style="text-align: center; font-size: 1.6em">
    <?php
    if ($page > 1) {
        ?>
        <a href="news-page-<?php echo $page - 1; ?>">Page précédente</a>
        <?php
    }
    ?>

    <?php
    for ($i = 1; $i <= $totalPages; $i++) {
        ?><a href="news-page-<?php echo $i; ?>" ><?php echo $i; ?></a> 
        <?php
    }
    ?>

    <?php
    if ($page < $totalPages) {
        ?>
        <a href="news-page-<?php echo $page + 1; ?>">Page suivante</a>
        <?php
    }
?>
</section>
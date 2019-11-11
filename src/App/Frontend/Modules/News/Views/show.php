<h3><?= $title ?></h3>

<?php
if ($visitor->hasFlash()) {
    ?>
    <p class="flash"> <?= $visitor->getFlash(); ?> </p>
    <?php
}
?>

<p>Par <em><?= $news['author'] ?></em>, le <?= $news['date_create']->format('d/m/Y à H\hi') ?></p>
<p><?= nl2br(htmlspecialchars($news['content'])) ?></p>

<?php if ($news['date_create'] != $news['date_update']) { ?>
  <p style="text-align: right;"><small><em>Modifiée le <?= $news['date_update']->format('d/m/Y à H\hi') ?></em></small></p>
<?php } ?>

<p><a href="comment-news-<?= $news['id'] ?>">Ajouter un commentaire</a></p>

<?php
if (empty($comments)) {
  ?>
  <p>Aucun commentaire n'a encore été posté!</p>
  <?php
} else {
  ?>
  <h3 class="comments-title">Les commentaires :</h3>
  <?php
}

foreach ($comments as $comment) {
  ?>
  <fieldset>
    <legend>
      Posté par <strong><?= nl2br(htmlspecialchars($comment['author'])) ?> </strong> le <?= $comment['date_create']->format('d/m/Y à H\hi') ?>
    </legend>
    <p><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
    <br />
  </fieldset>
<?php
}
?>

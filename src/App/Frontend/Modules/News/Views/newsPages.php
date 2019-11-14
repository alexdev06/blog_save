<div class="page-title">
    <h2><?= $title ?></h2>
    <hr class="star-primary">
</div>

    <div class="row">
            <div class="col-lg-12 ">  
                <p class="lead">Retrouvez les dernières news concernant les nouvelles technologies et le développement web.</p>
            </div>
    </div>

    <?php
    foreach ($listeNews as $news) {
        ?>

        <h3><a href="news-<?= $news['id'] ?>"><?= htmlspecialchars($news['title']) ?></a></h3>
        <p style="text-align: left;"><small><em>Modifiée le <?= $news['date_update']->format('d/m/Y à H\hi') ?></em></small></p>
        
        <p><?= nl2br(htmlspecialchars($news['content'])) ?> <a href="news-<?= $news['id'] ?>">lire la suite</a></p>
        <hr />
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
                if ($i == $page) {
                    ?><a style="color: #2c3e50" href="news-page-<?php echo $i; ?>"><?php echo '[',$i,']'; ?></a>
                    <?php 
                } else {
                    ?><a href="news-page-<?php echo $i ;?>" ><?php echo $i; ?></a> 
                    <?php
                }?>
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
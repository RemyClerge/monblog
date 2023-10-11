<?php
    foreach ($billets as $billet):
    ?>
    <article>
        <header>
            <h1 class="titreBillet"><?= $billet['titre'] ?></h1>
            <time><?= $billet['date'] ?></time>
        </header>
        <p><?= $billet['contenu'] ?></p>
        <em><a href="index.php?action=billet&id=<?= $billet['id']?>">Commentaires</a></em>
    </article>
    <hr />
<?php endforeach; ?>
            

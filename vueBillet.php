
    <article>
        <header>
            <h1 class="titreBillet"><?= $billet['titreBillet'] ?></h1>
            <time><?= $billet['dateBillet'] ?></time>
        </header>
        <p><?= $billet['contenuBillet'] ?></p><hr>
        <?php
            foreach ($com as $commentaire){
                echo "<p>" . $commentaire['auteur']. " a dit : </p>";
                echo "<p>" . $commentaire['contenu']. "</p>";
            }     
            ?>
    </article>
    <hr>
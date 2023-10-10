<?php
    require "Modele.php";
    $idBillet = $_GET['id'];
    try {
        $billet = getBillet($idBillet);
        $com= getCommentaires($idBillet);
        //Affichage
        $contenu = "vueBillet.php";
        require "gabarit.php";
    } catch (Exception $e){
        $msgErreur = $e->getMessage();
        $contenu = "vueErreur.php";
        require "gabarit.php";
    }

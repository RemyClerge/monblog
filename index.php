<?php
    require 'Controleur.php';

    try{
        if(isset($_GET['action'])){
            if ($_GET['action'] == 'billet') {
                $idBillet = $_GET['id'];
                unBillet($idBillet);
            }else {
                //une autre action demandée
                erreur("Action non valide");
            }
        }else {
            //pas d'action demandée : affichage par défaut
            accueil();
        }
    }catch (Exception $e){
        erreur($e->getMessage());
    }
?>


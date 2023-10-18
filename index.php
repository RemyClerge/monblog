<?php
    require 'Controleur/controleur.php';

    try{
        if(isset($_GET['action'])){
            if ($_GET['action'] == 'billet') {
                if(isset($_GET['id'])){
                    if(is_numeric($_GET['id'])){
                        $idBillet = $_GET['id'];
                        unBillet($idBillet);
                    }else{
                        erreur("Identifiant de billet non numerique");
                    }                    
                }else {
                    //id non présenter
                    erreur("Identifiant de billet non défini");
                }
                
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


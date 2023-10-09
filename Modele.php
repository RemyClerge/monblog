<?php
        function getBillets(){
	$bdd = getBdD();
    	$billets = $bdd->query('select idBillet as id, dateBillet as date,'
            . ' titreBillet as titre, contenuBillet as contenu from BILLET'
            . ' order by idBillet desc');
        return $billets;
        }
        function getBdD() {
                $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','root','',
                                                  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                return $bdd;
        }

        function getBillet($idBillet){
                $bdd = getBdD();
                $billet = $bdd->prepare('select * from billet WHERE idBillet =:idBillet');
                $billet->bindParam(':idBillet', $idBillet);
                $billet->execute();
                $res = $billet->fetch(PDO::FETCH_ASSOC);
                return $res;
        }

        function getCommentaires($idBillet){
                $bdd = getBdD();
                $com = $bdd->query('select idCommentaire as id, dateCommentaire as date,'
                                . ' auteurCommentaire as auteur, contenuCommentaire as contenu from COMMENTAIRE'
                                . ' where idBillet=' . $idBillet);
                return $com;
        
        }

        
?>
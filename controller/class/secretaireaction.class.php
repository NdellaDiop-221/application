<?php


    class SecretaireAction extends Database
    {
        public function add(Secretaire $secret) {
        

        }
        
    }

    #connexion a la base de donnees
$connexion= Database :: getPDO();
$requeteprepa = $connexion->prepare("INSERT INTO user(nom, prenom, email, mot_de_pass, id_role) VALUES(:nom, :prenom, :email, :mot_de_pass, :id_role)");

#recuperation des donnees
            $requeteprepa->bindValue(':nom', $secret->getnom());
            $requeteprepa->bindValue(':prenom', $secret->getprenom());
            $requeteprepa->bindValue(':email', $secret->getemail());
            $requeteprepa->bindValue(':mot_de_pass', $secret->getpassword());
            $requeteprepa->bindValue(':id_role', $secret->getid_role());

$requeteprepa->execute();
            
?>
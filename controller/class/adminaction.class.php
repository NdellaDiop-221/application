<?php


    class SecretaireAction extends Database
    {
        public function add(Secretaire $objet){
            $pdo = Database::getPDO();

            $sql1 = "INSERT INTO user(nom, prenom, email, mot_de_pass, id_role) VALUES(:nom, :prenom, :email, :mot_de_passw, :id_role)";
            $requeteprepa = $pdo->prepare($sql1);
            $requeteprepa->bindValue(':nom', $objet->getnom());
            $requeteprepa->bindValue(':prenom', $objet->getprenom());
            $requeteprepa->bindValue(':email', $objet->getemail());
            $requeteprepa->bindValue(':mot_de_passw', $objet->getmot_de_pass());
            $requeteprepa->bindValue(':id_role', $objet->getid_role());
            $requeteprepa->execute();

        }

        public function update(Secretaire $objet){
            $pdo = Database::getPDO();
            $objet->setId();
            
            $requeteprepa = $pdo->prepare("UPDATE user SET nom = :nom, prenom = :prenom, email = :email, mot_de_pass = :mot_de_pass, id_role = :id_role WHERE id = :id");

            $requeteprepa->bindValue(':id', $objet->getId());
            $requeteprepa->bindValue(':nom', $objet->getnom());
            $requeteprepa->bindValue(':prenom', $objet->getprenom());
            $requeteprepa->bindValue(':email', $objet->getemail());
            $requeteprepa->bindValue(':mot_de_pass', $objet->getmot_de_pass());
            $requeteprepa->bindValue(':id_role', $objet->getid_role());

            $requeteprepa->execute();

        }
        
        public function delete(Secretaire $objet){
            $pdo = Database::getPDO();
            $objet->setId();
            $requeteprepa = $pdo->prepare('DELETE FROM secretaires WHERE id= :id');
            $requeteprepa->bindValue(":id", $objet->getId());
            $requeteprepa->execute();

        }
    }
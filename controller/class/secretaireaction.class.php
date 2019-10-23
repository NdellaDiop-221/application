<?php


    class SecretaireAction extends Database
    {
        public function add(Secretaire $objet){
            $pdo = Database::getPDO();

            $sql1 = "INSERT INTO user(nom, prenom, email, mot_de_pass, id_role) VALUES(:nom, :prenom, :email, :mot_de_passw, :id_role)";
            $requeteprepa = $pdo->prepare($sql1);
            $requeteprepa->bindValue(':nom', $objet->getNom());
            $requeteprepa->bindValue(':prenom', $objet->getPrenom());
            $requeteprepa->bindValue(':email', $objet->getMail());
            $requeteprepa->bindValue(':mot_de_passw', $objet->getPass());
            $requeteprepa->bindValue(':id_role', $objet->getId_Role());
            $requeteprepa->execute();

            $objet->setId();
            $sql2 = "INSERT INTO secretaires(id, id_services) VALUES(:id, :services)";
            $requeteprepa2 = $pdo->prepare($sql2);
            $requeteprepa2->bindValue(':id', $objet->getId());
            $requeteprepa2->bindValue(':services', $objet->getService());
            $requeteprepa2->execute();
        }

        public function update(Secretaire $objet){
            $pdo = Database::getPDO();
            $objet->setId();
            
            $requeteprepa = $pdo->prepare("UPDATE user SET nom = :nom, prenom = :prenom, email = :email, mot_de_pass = :mot_de_pass, id_role = :id_role WHERE id = :id");

            $requeteprepa->bindValue(':id', $objet->getId());
            $requeteprepa->bindValue(':nom', $objet->getNom());
            $requeteprepa->bindValue(':prenom', $objet->getPrenom());
            $requeteprepa->bindValue(':email', $objet->getMail());
            $requeteprepa->bindValue(':mot_de_pass', $objet->getPass());
            $requeteprepa->bindValue(':id_role', $objet->getId_Role());

            $requeteprepa->execute();

            $requeteprepa2 = $pdo->prepare("UPDATE secretaires SET id_services = :services WHERE id = :id");

            $requeteprepa2->bindValue(':id', $objet->getId());
            $requeteprepa2->bindValue(':services', $objet->getService());

            $requeteprepa2->execute();
        }
        
        public function delete(Secretaire $objet){
            $pdo = Database::getPDO();
            $objet->setId();
            $requeteprepa = $pdo->prepare('DELETE FROM secretaires WHERE id= :id');
            $requeteprepa->bindValue(":id", $objet->getId());
            $requeteprepa->execute();

            $requeteprepa2 = $pdo->prepare('DELETE FROM user WHERE id= :id');
            $requeteprepa2->bindValue(":id", $objet->getId());
            $requeteprepa2->execute();
        }
    }
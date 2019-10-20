<?php

    class Admin extends Database
    {
        private $_id;
        private $_nom;
        private $_prenom;
        private $_mail;
        private $_pass;
        private $_id_role = 1;

        public function getId(){
            return $this->_id;
        }
        public function setId(){
            $bd = Database::getPDO();
            $req = $bd->prepare("SELECT id FROM users WHERE mail = :mail");
            $req->bindValue(":mail", $this->getMail());
            $req->execute();
            $id = $req->fetch();
            $this->_id = $id->{'id'};
        }

        public function getNom(){
            return $this->_nom;
        }
        public function setNom($nom){
            $this->_nom = $nom;
        }

        public function getPrenom(){
            return $this->_prenom;
        }
        public function setPrenom($prenom){
            $this->_prenom = $prenom;
        }

        public function getMail(){
            return $this->_mail;
        }
        public function setMail($mail){
            $this->_mail = $mail;
        }

        public function getPass(){
            return $this->_pass;
        }
        public function setPass($pass){
            $this->_pass = $pass;
        }

        public function getId_Role(){
            return $this->_id_role;
        }
        public function setRole($role){
            $this->_id_role = $role;
        }

        public function hydratation(array $donnees){
            foreach ($donnees as $key => $value) {
                $method = 'set'.ucfirst($key);
                if (method_exists($this, $method)) {
                    $this->$method($value);
                }
            }
        }
    }
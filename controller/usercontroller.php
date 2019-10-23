<?php

require "../view/class/hosto.php";

require "class/hosto.php";
require "class/secretaire.class.php";
require "class/secretaireaction.class.php";

if (isset($_POST['ajouter'])) {
    if (!empty($_POST['nm']) && !empty($_POST['prn']) && !empty($_POST['eml']) && !empty($_POST['mdp']) && !empty($_POST['srvc'])) {
        
        $nom = $_POST['nm'];
        $prenom = $_POST['prn'];
        $mail = $_POST['eml'];
        $mdpass = $_POST['mdp'];
        $srvic = $_POST['srvc'];
        
        $amy = new Secretaire();
        $amy->hydratation([
            "nom" => $nom,
            "prenom" => $prenom,
            "mail" => $mail,
            "pass" => $mdpass,
            "service" => $srvic
            ]);
        
        $moussa=new SecretaireAction();
        
        $moussa->add($amy);

        header("Location: ../view/administrateur/admin.php");
    }
}

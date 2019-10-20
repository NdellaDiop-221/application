<?php
require "hosto.php";
require "secretaire.class.php";
require "secretaireaction.class.php";

$ndoumbe=new Secretaire();
$ndoumbe->hydratation([
    "nom"=>"Diop",
    "prenom"=> "Ndoumbe",
    "mail"=>"ynjop@hotmail.com",
    "pass"=> 'jop01',
    "service" => "3"

]);

$aziz = new SecretaireAction();

$aziz->add($ndoumbe);

?>
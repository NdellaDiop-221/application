<?php
require "hosto.php";
require "secretaireaction.class.php";
require "secretaire.class.php";



$ndoumbe=new Secretaire();
$ndoumbe->hydratation([
"nom"=>"Sy",
"prenom"=> "Assane",
"mail"=>"syass@gmail.com",
"pass"=> 'sy1234',
"service"=>2

]);

$aziz=new SecretaireAction();


$aziz->add($ndoumbe);

?>
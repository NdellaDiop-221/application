<?php
require "hosto.php";
require "secretaireaction.class.php";
require "secretaire.class.php";



$ndoumbe=new Secretaire();
$ndoumbe->hydratation([
"nom"=>"Diop",
"prenom"=> "Ndoumbe",
"mail"=>"ndou@gmail.com",
"pass"=> 'ynj221',
"service"=>2

]);

$aziz=new SecretaireAction();


$aziz->add($ndoumbe);

?>
<?php
require "secretaireaction.php";
require "hosto.php";
require "secretaire.class.php";

$ndoumbe=new Secretaire();
$ndoumbe->hydratation([
"nom"=>"Diop",
"prenom"=> "Ndoumbe",
"email"=>"ynjop@hotmail.com",
"mot_de_pass"=> 'jop01',
"service"=>'Urgence'

]);

$azi=new Admin();
$aziz->hydratation([
"nom"=>"Dionne",
"prenom"=> "Abdou",
"email"=>"dou@hotmail.com",
"mot_de_pass"=> 'dione05'

]);

$aziz-> add ($ndoumbe);

?>
<?php
require "secretaire.class.php";

$ndoumbe=new Secretaire();
$ndoumbe->hydratation([
"nom"=>"Diop",
"prenom"=> "Ndoumbe",
"email"=>"ynjop@hotmail.com",
"mot_de_pass"=> 'jop01'

]);

var_dump($ndoumbe->getNom());

?>
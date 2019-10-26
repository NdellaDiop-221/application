<?php
require "../controller/class/secretaire.class.php";

$ndoumbe=new Secretaire();
$ndoumbe->hydratation([
"nom"=>"Diop",
"prenom"=> "Ndoumbe",
"email"=>"ynjop@hotmail.com",
"mot_de_pass"=> 'jop01'

]);

$aziz= new SecretaireAction();

$aziz->add$ndoumbe

?>




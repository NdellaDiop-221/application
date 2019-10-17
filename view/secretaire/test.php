<?php
require "controller/class/hosto.php";

$ndoumbe=new Secretaire();
$ndoumbe->hydratation([
"nom"=>"Diop",
"prenom"=> "Ndoumbe",
"email"=>"ynjop@hotmail.com",
"mot_de_pass"=> 'jop01'

)];

echo $ndoumbe->getnom();

?>



<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css"href="../style/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    </head>
    <body>
    <div>
        <div>
                <div>test</div>
                    <div>
<ul>
        <li href="#">Liste des Secretaires</li>
        <li a href="#">Liste des Medecins</li>
        <li a href="#">Ajouter un utilisateur</li>
        <li a href="#">Supprimer un utilisateur</li>
</ul>

                    </div>
        </div>
    </div>
    
    <form method="POST" action="../controller/ttt.php">
    <div class="imgcontainer">
        </div>
        <div class="container">
                <label for="uname"><b>Email</b></label><br>
                <input type="email" placeholder="votre email" name="uname"><br>
                <label for="psw"><b>Mot de passe</b></label><br>
                <input type="password" placeholder="votre mot de passe" name="psw"><br>
                <button type="submit" name="valider">Login</button>
    </body>
</html>
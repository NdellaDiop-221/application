<?php

$servi = array();
require "../../controller/class/hosto.php";

$serv = array();

$pdo = Database::getPDO();

$req = $pdo->query("SELECT * FROM services");

while($donnees = $req->fetch()){
        $serv[] = $donnees;
}
?>

<!DOCTYPE html>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/boostrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
        <form method="POST" action="../../controller/usercontroller.php">
                <div class="form-row">
                        <div class="col-md-4 mb-3">
                                <label>Nom</label>
                                <input type="text" class="form-control" name="nm" placeholder="nom">
                        </div>
                        <div class="col-md-4 mb-3">
                                <label>Prenom</label>
                                <input type="text" class="form-control" name="prn" placeholder="prenom">
                        </div>
                        <div class="col-md-4 mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="eml" placeholder="email">
                        </div>
                        <div class="col-md-4 mb-3">
                                <label>Mot de passe </label>
                                <input type="password" class="form-control" name="mdp" placeholder="mot de passe">
                        </div>
                        <div class="col-md-4 mb-3">
                                <label>Service</label>
                                <select class="form-control" name="srvc" id="service">
                                        <?php
                                        for ($i=0; $i < sizeof($serv); $i++) { 
                                                echo "<option value=".$serv[$i]->{'id_services'}.">".$serv[$i]->{'service'}."</option>";
                                        }
                                        ?>
                                </select>
                        </div>
                </div>
                <button class="btn btn-primary" type="submit" name="ajouter">Ajouter</button>
        </form>
</body>
</html>
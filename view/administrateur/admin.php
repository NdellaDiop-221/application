<?php
require "../../controller/class/hosto.php"; /* ici */

$connect = Database::getPDO();
$table = array(); /* ici */
$listeSecretaire= array();
$req = $connect->query("SELECT * FROM user WHERE id = 2");

while ($donnees=$req->fetch()){
$table[]= $donnees;
}
for ($i = 0; $i < sizeof($table); $i++){
$requet = $connect->query("SELECT service FROM services,secretaires WHERE services.id_services = secretaires.id_services AND secretaires.id =".$table[$i]->{'id'}); /* ici */
$serv=$requet->fetch();
$servicesSecretaire[$i]=$serv;
}

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/admin.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>

<ul>
    <li><a class="active" href="#">Acceuil</a></li>
    <li><a href="#">Patients</a></li>
    <li><a href="#contact">Medecins</a></li>
    <li><a href="#Rende-vous">Secretaires</a></li>
    <li style="float:right"><a href="#about">Deconnexion</a></li>
</ul>

<div style="padding-left:16px">
    <h2>Interface Admnnistrateur</h2>
</div>

<div class="header">
        <h1> <marquee>Administrateur </marquee></h1>
        <p>Gestion</p>
</div>
    <div class=bloc>
        <div class="blocgauche">
                    <div class="gauche">
                            <h1>Patients</h1>
                            <p><i class='fas fa-user-friends' style='font-size:48px;color:red'></i></p>
                    </div>

                    <div class="gauche">
                            <h1>Medecins</h1>
                            <p><i class='fas fa-user-md' style='font-size:48px;color:red'></i></p>
                    </div>

        </div>
        
        <div class= milieu>
                            <h1>espace</h1>
                            <p>My supercool header</p>
                            <i class='far fa-calendar-alt' style='font-size:50px;color:red;position:center'></i>
        </div>

        <div class="droite">
                    <div class="gauche">
                            <h1>Secretaires</h1>
                            <p>   <i class='far fa-address-card' style='font-size:48px;color:red'></i></p>
                        
                    </div>

                    <div class="gauche">
                            <h1>Commentaires</h1>
                            <p><i class='far fa-comments' style='font-size:48px;color:red'></i></p>
                    </div>

        </div>
    </div><br> <br>
    <table>
        <tr>
        
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Mot de pass</th>
            <th>Service</th>
            <th>Action</th>
        
        </tr>
        <?php

for ($i = 0; $i<sizeof($table); $i++){
    ?>
        <tr>
        
            <td><?php echo $table[$i]->{'nom'};?> </td>
            <td><?php echo $table[$i]->{'prenom'};?></td>
            <td> <?php echo $table[$i]->{'email'};?></td> <!-- ici -->
            <td> <?php echo $table[$i]->{'mot_de_pass'};?></td> <!-- ici -->
            <td><?php echo $servicesSecretaire[$i]->{'service'}; ?></td> <!-- ici -->
            <td class="btn"> <button type="submit" name="ajout">modifier</button>
            <button type="submit" name="ajout">supprimer</button></td>
        
</tr>
<?php

}
?>

</table><br>
<button type="submit" name="ajout">Ajouter</button>
</body>
</html>


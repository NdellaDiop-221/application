<?php
/*session*/
session_start();

if (!isset($_SESSION ['id'])) {
header('Location:../login.php');
exit; 
}

if ($_SESSION['role']!=1){

    header("Location:../login.php");
}

require "../../controller/class/hosto.php"; 

/* conexion a la base de donnees et recuperation */ 

$connect = Database::getPDO();
$table = array(); /* ici*/ 
$ServiceSecretaire = array();
$listeSecretaire= array();
$req = $connect->query("SELECT * FROM user WHERE id_role = 2");

while ($donnees=$req->fetch()){
    $table[]= $donnees;
}
for ($i=0; $i < sizeof($table); $i++) {
    $req2 = $connect->query("SELECT service FROM services,secretaires WHERE services.id_services = secretaires.id_services AND secretaires.id=".$table[$i]->{'id'});
    $serv = $req2->fetch();
    $ServiceSecretaire[$i] = $serv;
}

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/admin.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<!-- barre de navigation-->
<ul>
    <li><a class="active" href="#">Acceuil</a></li>
    <li><a href="#">Patients</a></li>
    <li><a href="#contact">Medecins</a></li>
    <li><a href="#Rende-vous">Secretaires</a></li>
    <li style="float:right"><a href="../deconnexion.php">Deconnexion</a></li>
</ul>
<!--header-->
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
/*tableau*/
for ($i = 0; $i<sizeof($table); $i++){
    ?>
        <tr>
        
            <td><?php echo $table[$i]->{'nom'};?> </td>
            <td><?php echo $table[$i]->{'prenom'};?></td>
            <td> <?php echo $table[$i]->{'email'};?></td> <!-- ici -->
            <td> <?php echo $table[$i]->{'mot_de_pass'};?></td> <!-- ici -->
            <td><?php echo $ServiceSecretaire[$i]->{'service'}; ?></td> <!-- ici -->
            <td class="btn">
                <button type="button" name="ajout" >modifier</button>
                <button class="btn" data-name="<?php echo $table[$i]->{'prenom'}; ?>" data-email="<?php echo $table[$i]->{'mail'} ?>" class="openConfirm" href="" data-toggle="modal" data-target="#confirmation"type="button">supprimer</button>
            </td>
        
</tr>
<?php

}
?>
</table><br>
<div>
        <ul>
        <li> <a href="ajout.php">Ajouter</a></li>
        </ul>
</div><br> <br>

    <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="../../controller/actionAdmin.php">
            <input type="hidden" name="mail" value="" id="confirm">
            Voulez-vous vraiment supprimer <span id="text"></span> ?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
            <button name="deletesecretaire" type="submit" class="btn btn-primary">Oui</button>
            </form>
        </div>
        </div>
    </div>
    </div>
<script src="../fichier.js"></script>


</body>
</html>
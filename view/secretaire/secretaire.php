<?php

session_start();

if (!isset($_SESSION ['id'])) {
header('Location:../login.php');
exit; 
}

if ($_SESSION['role']!=2){

    header("Location:../login.php");
}
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/secr.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<!--header-->
<ul>
    <li><a class="active" href="#">Acceuil</a></li>
    <li><a href="#patient">Patients</a></li>
    <li><a href="#medecin">Medecins</a></li>
    <li><a href="#rv">Rendez-vous</a></li>
    <li style="float:right"><a href="../deconnexion.php">Deconnexion</a></li>
</ul>

<div style="padding-left:16px">
    <h2>Interface Secretaire</h2>
</div>

<div class="header">
        <h1> <marquee>Secretaire </marquee></h1>
        <p>Gestion</p>

<!--action-->

</div>
    <div class="action"> 
            
                        <div id="patient" class="gauche">
                                <h1>Patients</h1>
                                <p><i class='fas fa-user-friends' style='font-size:48px;color:red'></i></p>
                                <li><a href="#Rende-vous">consulter</a></li>
                        </div>
                        <div id="rv" class= "milieu">
                                <h1>Rendez-vous</h1>
                                <a href="#Rende-vous">consulter</a>
                                <p> <i class='far fa-calendar-alt' style='font-size:50px;color:red;position:center'></i></p>
                        </div>

                        <div id="medecin" class="gauche">
                                <h1>Medecin</h1>
                                <p><i class='fas fa-user-md' style='font-size:48px;color:red'></i></p>
                        </div>
                        
                
        
        
        
        </div>
<!--tableau-->
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
?> <!--recuperer des information dans un tablau-->
        <tr>
                
                <td><?php echo $table[$i]->{'nom'};?> </td>
                <td><?php echo $table[$i]->{'prenom'};?></td>
                <td> <?php echo $table[$i]->{'email'};?></td> <!-- ici -->
                <td> <?php echo $table[$i]->{'mot_de_pass'};?></td> <!-- ici -->
                <td><?php echo $ServiceSecretaire[$i]->{'service'}; ?></td> <!-- ici -->
                <td class="btn">
                        <button type="button" name="ajout" >modifier</button>
                        <button type="button" name="ajout" value='<?php $table[$i]->{'email'}?>'>supprimer</button>
                </td>
                
        </tr>
<?php

}
?>
</table><br>

        <br> <br>
    
<button type="submit" name="ajout">Ajouter</button>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION ['id'])) {
header('Location:../login.php');
exit; 
}

if ($_SESSION['role']!=3){

    header("Location:../login.php");
}

?>




<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/med.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>

<ul>
    <li><a class="active" href="#">Acceuil</a></li>
    <li><a href="#">Patients</a></li>
    <li><a href="#contact">Medecins</a></li>
    <li><a href="#Rende-vous">Rendez-vous</a></li>
    <li style="float:right"><a href="../deconnexion.php">Deconnexion</a></li>
</ul>

<div style="padding-left:16px">
    <h2>Interface Medecin</h2>
</div>

<div class="header">
        <h1> <marquee>Medecin </marquee></h1>
        <p>Manager</p>
</div>
    <div class=bloc>
        <div class="blocgauche">
                    <div class="gauche">
                            <h1>Patients</h1>
                            <p><i class='fas fa-user-friends' style='font-size:48px;color:red'></i></p>
                    </div>

                    <div class="gauche">
                            <h1>Plannig</h1>
                            <p><i class='fas fa-user-md' style='font-size:48px;color:red'></i></p>
                    </div>

        </div>
        
        <div class= milieu>
                            <h1>Rendez-vous</h1>
                            <p>My supercool header</p>
                            <i class='far fa-calendar-alt' style='font-size:50px;color:red;position:center'></i>
        </div>

        <div class="droite">
                    <div class="gauche">
                            <h1>Specialite</h1>
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
            <th>mot de pass</th>
            <th>action</th>
        
        </tr>
        
    
        <tr>
        
            <td> Diop</td>
            <td>sokhna</td>
            <td>sodiop@gmail.com</td>
            <td>diopso4</td>
           <td class="btn"> <button type="submit" name="ajout">modifier</button>
            <button type="submit" name="ajout">supprimer</button></td>
        
        </tr>
        
            <td>Diam</td>
            <td>Ablaye Mody</td>
            <td>diam@gmail.com</td>
            <td>diam05</td>
            <td class="btn"> <button type="submit" name="ajout">modifier</button>
            <button type="submit" name="ajout">supprimer</button></td>
        
            
        <tr>
        </tr>
        <tr>
        
            <td>Toure</td>
            <td>Ousman</td>
            <td>oustoure@gmail.com</td>
            <td>toureouz</td>
            <td class="class="btn"> <button type="submit" name="ajout">modifier</button>
            <button type="submit" name="ajout">supprimer</button></td>
        
        </tr>
    
</table><br>
<button type="submit" name="ajout">Ajouter</button>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/admin.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="#" class="active">Acceuil</a>
    <div class="dropdown">
    <button class="dropbtn">
    <i class="fa fa-caret-down"></i>
    </button>
    
</div> 
<div class="dropdown">
    <button class="dropbtn">Les Rendez-Vous
    <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="#">Aujourdh'ui</a>
        <a href="#">Dans la semaine</a>
        <a href="#">Dans le mois</a>
    </div>
</div> 
<div class="dropdown">
    <button class="dropbtn">Nouveau rendez-Vous
    <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="clendrier.php">Heure</a>
        <a href="#">Patient</a>
        <a href="#">Medecin</a>
    </div>
</div> 

    <a href="#about">Modifier un RV</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<div style="padding-left:16px">
    <h2>Interface Secretaire</h2>
</div>

<div class="header">
        <h1> <marquee>Secretaire </marquee></h1>
        <p>Gestion</p>
</div>
    <div class=bloc>
        <div class="blocgauche">
                    <div class="gauche">
                            <h1>Patients</h1>
                            <p><i class='fas fa-user-friends' style='font-size:48px;color:red'></i></p>
                    </div>

                    <div class="gauche">
                            <h1>Medecin</h1>
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
                            <h1>Information</h1>
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
           <td> <button type="submit" name="ajout">modifier</button>
            <button type="submit" name="ajout">supprimer</button></td>
        
        </tr>
        
            <td>Diam</td>
            <td>Ablaye Mody</td>
            <td>diam@gmail.com</td>
            <td>diam05</td>
            <td> <button type="submit" name="ajout">modifier</button>
            <button type="submit" name="ajout">supprimer</button></td>
        
            
        <tr>
        </tr>
        <tr>
        
            <td>Toure</td>
            <td>Ousman</td>
            <td>oustoure@gmail.com</td>
            <td>toureouz</td>
            <td> <button type="submit" name="ajout">modifier</button>
            <button type="submit" name="ajout">supprimer</button></td>
        
        </tr>
        
            
</table><br>

<button type="submit" name="ajout">Ajouter</button>
</body>
</html>
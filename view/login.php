<?php
?>


<!DOCTYPE html>

            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>login</title>
            
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="view/css/login.css">
            </head>
            <body>
<form methode="Get" action="controller/ttt.php">
    <div class="imgcontainer">
    <img src="view/img/rvhopital.jpg" alt="user" class="avatar">
        </div>
        <div class="container">
                <label for="uname"><b>Email</b></label>
                <input type="text" placeholder="votre mail" name="uname" required>

                <label for="psw"><b>Mot de passe</b></label>
                <input type="password" placeholder="votre mot de passe" name="psw" required>
                    

                <select>
                        <option name="secre"value="taire" href=> Secretaire</option>
                        <option ame="med"value="cin"> Medecin</option>
                </select> 
                <button type="submit" name="valider" value="envoyer">Login</button>
                

        
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Annuler</button>
            <span class="psw"> <a href="#">Mot de passe oublie?</a></span>
        </div>
</form>
            </body>  
</html>
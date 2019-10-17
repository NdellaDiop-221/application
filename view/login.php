<!DOCTYPE html>

            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>login</title>
            
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="css/login.css">
            </head>
            <body>
<form method="POST" action="../controller/ttt.php">
    <div class="imgcontainer">
    <img src="img/rvhopital.jpg" alt="user" class="avatar">
        </div>
        <div class="container">
                <label for="uname"><b>Email</b></label><br>
                <input type="email" placeholder="votre email" name="uname"><br>
                <label for="psw"><b>Mot de passe</b></label>
                <input type="password" placeholder="votre mot de passe" name="psw">
                <select name="choix">
                        <option value="" selected>Role?</option>
                        <option value="administrateur"> Administrateur</option>
                        <option value="secretaire" href=> Secretaire</option>
                        <option value="medecin"> Medecin</option>
                </select> 
                <button type="submit" name="valider">Login</button>
                

        
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Annuler</button>
            <span class="psw"> <a href="#">Mot de passe oublie?</a></span>
        </div>
</form>
            </body>  
</html>
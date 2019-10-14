<?php
if (isset($_POST['valider'])){

    if (!empty($_POST['uname']) AND !empty($_POST['psw'])AND !empty($_POST['choix'])){ 
            $utilisateur = trim(htmlspecialchars($_POST ["uname"]));
            $motdepass = trim(htmlspecialchars($_POST ["psw"]));
            $choix= trim(htmlspecialchars($_POST ["choix"]));

            require '.././class/hosto.php';
            
            $ndoumbe=Database::getPDO();
            var_dump($ndoumbe);
            
echo 'THIS DRAGON';
        
    }   
}







    




?>
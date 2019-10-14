<?php

require 'class/hosto.php';
            
if (isset($_POST['valider'])){

    if (!empty($_POST['uname']) AND !empty($_POST['psw'])AND !empty($_POST['choix'])){ 
            $utilisateur = trim(htmlspecialchars($_POST ["uname"]));
            $motdepass = trim(htmlspecialchars($_POST ["psw"]));
            $choix= trim(htmlspecialchars($_POST ["choix"]));
        
            $ndoumbe=Database::getPDO();
            var_dump($ndoumbe);
            $requete = $bdd->prepare('SELECT id FROM user WHERE email =:email AND mot_de_pass =:mot_de_pass');
            $requete->execute(array(
                'email' =>$utilisateur,
                'mot_de_pass' =>$motdepass
            ));
            $result=$requete->fetch();
            
            
echo 'THIS DRAGON';


        
    }   
}







    




?>
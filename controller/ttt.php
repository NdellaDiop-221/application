<?php

    require 'class/hosto.php';
                
    if (isset($_POST['valider'])){

        if (!empty($_POST['uname']) && !empty($_POST['psw']) && !empty($_POST['choix'])){ 
            $utilisateur = trim(htmlspecialchars($_POST ["uname"]));
            $motdepass = trim(htmlspecialchars($_POST ["psw"]));
            $choix= trim(htmlspecialchars($_POST ["choix"]));
        
            $ndoumbe=Database::getPDO();

            $requete = $bdd->prepare('SELECT id FROM user WHERE email =:email AND mot_de_pass =:mot_de_pass');
            $requete->execute(array(
                'email' =>$utilisateur,
                'mot_de_pass' =>$motdepass
            ));
            $result=$requete->fetch();

            if (!$result){
                header("Location: ../view/logon.php");
            }
            else{
                session_start();

                $_SESSION['id'] = $result->{'id'};
                $_SESSION['mail'] = $utilisateur;

                if ($choix == "admin") {
                    # code... vers interface admin
                }
                elseif ($choix == "taire") {
                    # code... vers interface secretaire
                }
                else ($choix == "cin"){
                    # code... vers interface medecins
                }
            }
        }
        else{
            # code... vers login
        }
    }
    else{
        header('Location: ../views/login');
    }
<?php
    
    if (isset($_POST['valider'])) {
        if (!empty($_POST['uname']) && !empty($_POST['psw']) && !empty($_POST['choix'])) {
            
            $mail = $_POST['uname'];
            $passw = $_POST['psw'];
            $choix = $_POST['choix'];

            require "class/hosto.php";

            $connect = Database::getPDO();

            $requete = $connect->prepare('SELECT id_user FROM user WHERE email = :mail AND mot_de_pass = :psw');
            $requete->execute(array(
                    'mail' => $mail,
                    'psw' => $passw
                ));
            $exist = $requete->fetch();

            if(!$exist){
                header("Location: ../view/login.php");
                exit;
            }
            else{
                session_start();

                $_SESSION['id'] = $exist->{'id_user'};
                $_SESSION['mail'] = $mail;

                if ($choix == "administrateur") {
                    header("Location: ../view/administrateur/admin.php");
                }
            }
        }
    }
    else{
        header("Location: ../view/login.php");
        exit;
    }
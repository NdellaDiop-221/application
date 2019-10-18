<?php
    
    if (isset($_POST['valider'])) {
        if (!empty($_POST['uname']) && !empty($_POST['psw'])) {
            
            $mail = $_POST['uname'];
            $passw = $_POST['psw'];

            require "class/hosto.php";

            $connect = Database::getPDO();

            $requete = $connect->prepare('SELECT * FROM users WHERE mail = :mail AND pass = :pass');
            $requete->execute(array(
                    'mail' => $email,
                    'pass' => $password
                ));
            $result = $requete->fetch();

            if (!$result) {
                header("Location: ../view/login.php");
                exit;
            }
            else{
                session_start();
                $_SESSION['id'] = $result->{'id'};

                $role = $result->{'id_role'};

                switch ($role) {
                    case 1:
                        header("Location: ../view/administrateur/admin.php");
                    break;
                    case 2:
                        header("Location: ../view/secretaire/secretaire.php");
                    break;
                    case 3:
                        header("Location: ../view/medecin/medecin.php");
                    break;

                default:
                    header("Location: ../view/login.php");
                    exit;
                }
            }
        }
        else{
            header("Location: ../view/login.php");
            exit;
        }
    }
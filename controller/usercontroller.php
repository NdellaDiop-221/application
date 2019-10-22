<?php

/*require "../view/class/hosto.php";

$connect = Database::getPDO();

    function adduser( $non, $prenom, $email,$mot_de_pass,$service){

$sql= "INSERT INTO user Values (NULL,'$non','$prenom','$email','$mot_de_pass','$service')";

return self::$pdoInstance;
    }*/

require "../view/class/hosto.php";

if (isset($_POST['ajouter'])) {
if (!empty($_POST['nm']) && !empty($_POST['prn'])&& !empty($_POST['eml']) && !empty($_POST['mdp']) && !empty($_POST['srvc'])) {


$nom = $_POST['nm'];
$prenom = $_POST['prn'];
$mail = $_POST['eml'];
$mdpass = $_POST['mdp'];
$srvic = $_POST['srvc'];
//echo'yes';
//$connect = Database::getPDO();
/*$requete = $connect->prepare('INSERT INTO user WHERE nom = :nm AND prenom= :prn AND mail = :eml AND mdpass = :mdp AND servic = :srvc');
$requete->execute(array(
'email' => $mail,
'mot_de_pass' => $passw,));
$result = $requete->fetch();*/
}
    }

$amy=new Secretaire();
$amy->hydratation([
"nom"=>$nom,
"prenom"=> $prenom,
"email"=>$mail,
"mot_de_pass"=> $mdpass,
"service"=>$srvic

]);

$moussa=new Admin();


$moussa->add($amy);
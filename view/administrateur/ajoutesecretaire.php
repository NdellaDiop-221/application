<?php
//Si on a cliqué le bouton enregistrer
if(isset($_POST['enregistrer'])){
?>
    <?php include('ttt.php'); ?>
<?php
	// Si tout va bien, on peut continuer et on va creer les variables qui vont porter les infos de formulaire

    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
	$mot_de_pass=$_POST["mot_de_pass"];
	$id_service=$_POST["id_service"];
	

    
	// stocker les information dans la base de donnees
$sql=$bd->prepare( 'INSERT INTO Secretaire (nom, prenom, email, mot_de_pass, id_service,) VALUES(:nom, :prenom, :email, :mot_de_pass, :id_service,)');
    $sql=$bd->execute();{
		die("ERREUR" .mysql_error()); //die dans le php joue de le role de echo ou print
	}	
	$infos= "<center>Secretaire ajoute!</center>";
}
?>
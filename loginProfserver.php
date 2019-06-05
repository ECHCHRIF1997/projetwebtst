<?php 


	$nom = '';
	$prenom = '';
	$depart = '';
	$tel = '';
	$email = '';
	$date_ajout = '';
	$id_prof = 0;
	$edit_state = false;
	$user = "";
	$motdepasse = 0 ;



	$db= mysqli_connect('localhost','root','','bd');

	if (isset($_POST['modifier'])) {
	$nom = trim($_POST['nom']);
	$prenom = trim($_POST['prenom']);
	$depart = trim($_POST['depart']);
	$tel = trim($_POST['tel']);
	$email = trim($_POST['email']);
	$date_modif = date("d/m/Y");
	$user = $_POST['user'];
	$motdepasse = $_POST['motdepasse'];
	mysqli_query($db, "UPDATE prof SET nom='$nom' , prenom='$prenom' , depart='$depart' , tel='$tel' , email='$email' , date_modif='$date_modif' , user='$user' , motdepasse='$motdepasse' WHERE id_prof=$id_prof");
	
	header('location: profil.php');
}






?>
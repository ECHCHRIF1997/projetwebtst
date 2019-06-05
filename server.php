<?php
	
	session_start();


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
//if($db) echo '<script>alert("succes")</script>'; else echo '<script>alert("ereur")</script>';

if(isset($_POST['ajouter'])){
	$nom = trim($_POST['nom']);
	$prenom = trim($_POST['prenom']);
	$depart = trim($_POST['depart']);
	$tel = trim($_POST['tel']);
	$email = $nom.".".$prenom."@ensate.com";
	$date_ajout = date("d/m/Y");
	$date_modif = date("d/m/Y");
	$randp=rand(100,999);
	$pass = $nom.$randp;
	
	$passw = md5(str_shuffle($pass));
	$rand=rand(1,99);
	$user = str_shuffle($nom).$rand;
	$query= "INSERT INTO prof (nom, prenom, depart, tel, email, date_ajout, date_modif, motdepasse, user) VALUES ('$nom', '$prenom', '$depart', '$tel', '$email', '$date_ajout','$date_modif' , '$passw','$user')";
	mysqli_query($db,$query);
	$_SESSION['msg'] = "Professeur ajouté ! ";
header('location: inscription.php');

}

if (isset($_POST['modifier'])) {
$nom = trim($_POST['nom']);
	$prenom = trim($_POST['prenom']);
	$depart = trim($_POST['depart']);
	$tel = trim($_POST['tel']);
	$email = trim($_POST['email']);
	$date_ajout = trim($_POST['date_ajout']);
	$id_prof = $_POST['id_prof'];
	$date_modif = date("d/m/Y");
	mysqli_query($db, "UPDATE prof SET nom='$nom' , prenom='$prenom' , depart='$depart' , tel='$tel' , date_modif='$date_modif' WHERE id_prof=$id_prof");
	
	header('location: profil.php');
}


if (isset($_GET['del'])) {


	$id_prof = $_GET['del'];
	mysqli_query($db, "DELETE FROM prof WHERE id_prof=$id_prof");
	$_SESSION['message'] = "PROF Supprimé !"; 
	header('location: profil.php');
}



if (isset($_POST['connecter'])) {
	$user = trim($_POST['user']);
	$motdepasse = trim($_POST['motdepasse']);

	$record = mysqli_query($db, "SELECT * FROM prof WHERE user='".$user."'");

    $na = mysqli_fetch_array($record);
 	//die(var_dump($na));
        $nom = $na['nom'];
        $prenom = $na['prenom'];
        $depart = $na['depart'];
        $tel = $na['tel'];
        $email = $na['email'];
        $date_ajout = $na['date_ajout'];
        $motdepasse = $na['motdepasse'];

	include('infoperso.php');
}





$results = mysqli_query($db,"SELECT * FROM prof");



?>
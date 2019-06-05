<?php include('server.php');



    if (isset($_GET['edit'])) {
        $user = $_GET['edit'];
        $motdepasse = $_GET['motdepasse'];
        
        $rec = mysqli_query($db, "SELECT * FROM prof WHERE user=$user");
        $n = mysqli_fetch_array($rec);
 
        $nom = $n['nom'];
        $prenom = $n['prenom'];
        $depart = $n['depart'];
        $tel = $n['tel'];
        $email = $n['email'];
        $date_ajout = $n['date_ajout'];
       
        
    }



 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Informations personelles</title>
    
        <link rel="stylesheet" href="css/home.css">
        <link rel="icon" href="images/icone.png">
        <style type="text/css">
.msg{
    display: block;
    margin: 30px auto;
    padding: 10px;
    border-radius: 5px;
    color: white;
    background-color: #4caf50;
    border: 1px solid green;
    width: 800px;
    text-align: center;
}




</style>

</head>
<body>
    
    
        <header>
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h1 class="logo"><a href="acceuil.html">Ensa<span>Té</span></a></h1>
                <ul>
                    <li><a href="acceuil.html">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
        
        
       
        <div class="milieu">

            <form class="formulaire" action='server.php' method='post'>
            <a href="profil.php" class="titre">
            <h1>  Informations Personelles</h1>
            </a>


        <div class="us">
            <label for="user"><i class="fa fa-user"></i></label>
            <input id="user" type="text" name="user" placeholder="Entrez votre Surnom" value="<?php echo $user ; ?>">
        </div>


        <div class="us">
            <label for="nom"><i class="fa fa-user"></i></label>
            <input id="nom" type="text" name="nom" placeholder="Entrez le nom" value="<?php echo $nom; ?>">
        </div>

            <div class="us">
            <label for="pre"><i class="fa fa-user"></i></label>
            <input id="pre" type="text" name="prenom" placeholder="Entrez le prenom" value="<?php echo $prenom; ?>">
        </div>


        <div class="us">
            <label for="pass"><i class="fa fa-lock"></i></label>
            <input id="pass" type="password" name="motdepasse" placeholder="Entrez votre Motdepasse" value="<?php echo $motdepasse; ?>">
        </div> 


        <div class="us">
            <label for="dep"><i class="fa fa-briefcase"></i></label>
            <input id="dep" type="text" name="depart" placeholder="Departement" value="<?php echo $depart; ?>">
        </div>

          <div class="us">
            <label for="tel"><i class="fa fa-phone"></i></label>
            <input id="tel" type="tel" name="tel" placeholder="Entrez le Numero de Tel" value="<?php echo $tel; ?>">
        </div>
        


        
          <div class="us">
            <label for="mail"><i class="fa fa-envelope"></i></label>
            <input id="mail" type="email" name="email" placeholder="Entrez l'adresse E-mail" value="<?php echo $email; ?>">
        </div>

         <div class="us">
            <label for="date"><i class="fa fa-table"></i></label>
            <input id="date" type="date" name="date_ajout" value="<?php echo $date_ajout; ?>">

        </div>
        

        <div>
            
            <button class="btn" type="submit" name="modifier" >Modifier</button>
           
            
        </div>






    </form>
        </div>        
        
    </div>
   
    
    
    
</body>
</html>
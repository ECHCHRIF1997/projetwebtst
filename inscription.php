<?php include('server.php');


    if (isset($_GET['edit'])) {
        $id_prof = $_GET['edit'];
        $edit_state = true;
        $rec = mysqli_query($db, "SELECT * FROM prof WHERE id_prof=$id_prof");
        $n = mysqli_fetch_array($rec);
 
        $nom = $n['nom'];
        $prenom = $n['prenom'];
        $depart = $n['depart'];
        $tel = $n['tel'];
        $email = $n['email'];
        $date_ajout = $n['date_ajout'];
        $id_prof=$n['id_prof'];
        $user=$n['user'];
        
    }


 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscription des professeurs</title>
    
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
        
                <?php if (isset($_SESSION['msg'])): ?>
            <a class="msg" href="profil.php">
                <?php 
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                ?>
            </a>


    <?php endif?>
       
        <div class="milieu">

            <form class="formulaire" action='server.php' method='post'>
            <a href="profil.php" class="titre">
            <?php if ($edit_state == false): ?>
            <h1>  Ajouter un professeur</h1>
            <?php else: ?>
            <h1>  Modifier un professeur</h1>
            <?php endif ?>

            </a>

            <input type="hidden" name="id_prof" value="<?php echo $id_prof; ?>">
        <div class="us">
            <label for="nom"><i class="fa fa-user"></i></label>
            <input id="nom" type="text" name="nom" placeholder="Entrez le nom" value="<?php echo $nom; ?>">
        </div>

            <div class="us">
            <label for="pre"><i class="fa fa-user"></i></label>
            <input id="pre" type="text" name="prenom" placeholder="Entrez le prenom" value="<?php echo $prenom; ?>">
        </div>

        <div class="us">
            <label for="dep"><i class="fa fa-briefcase"></i></label>
            <input id="dep" type="text" name="depart" placeholder="Departement" value="<?php echo $depart; ?>">
        </div>

          <div class="us">
            <label for="tel"><i class="fa fa-phone"></i></label>
            <input id="tel" type="tel" name="tel" placeholder="Entrez le Numero de Tel" value="<?php echo $tel; ?>">
        </div>
            
            <?php if ($edit_state): ?>

             <div class="us">
            <label for="user"><i class="fa fa-user"></i></label>
            <input id="user" type="text" name="user" placeholder="Entrez le user" value="<?php echo $user; ?>">
        </div>
        
    


        <?php endif ?>

        <div>
            <?php if ($edit_state == false): ?>
            <button class="btn" type="submit" name="ajouter" >Ajouter</button>
            <?php else: ?>
            <button class="btn" type="submit" name="modifier" >Modifier</button>
            <?php endif ?>

            
        </div>






    </form>
        </div>        
        
    </div>
   
    
    
    
</body>
</html>
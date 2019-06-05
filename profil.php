
<?php include('server.php'); 


?>

<!DOCTYPE html>
<html>

<head>
    <title>Consultation des informations</title>
    <meta charset="utf-8">
    <meta name="author" content="ayoub">
    <link rel="icon" href="images/icone.png">
    <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/tab.css" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



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




    <table class="profil" color="red">
  <thead>
    <tr>
      <th>UserName</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Departement</th>
      <th>Telephone</th>
      <th>E-mail</th>
      <th>Date d'ajout</th>
      <th>Date de modification</th>
      
      <th colspan="2" class="ajouter"><a href="inscription.php">Ajouter</a></th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($row = mysqli_fetch_array($results)) { ?>
            <tr>
                <td><?php echo $row['user']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['depart']; ?></td>
                <td><?php echo "0".$row['tel']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['date_ajout']; ?></td>
                <td><?php echo $row['date_modif']; ?></td>
                <td><a class="botona modifier" href="inscription.php?edit=<?php echo $row['id_prof']; ?>">Modifier</a></td>
                <td><a class="botona supprimer" href="server.php?del=<?php echo $row['id_prof']; ?>">Supprimer</a></td>
      
      
            </tr>

       <?php } ?>
    


  </tbody>
</table>

    


</body>

</html>
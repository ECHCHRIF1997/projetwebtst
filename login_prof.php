

<?php include('server.php'); 


?>



<!DOCTYPE html>
<html>

<head>
    <title> formulaire</title>
    <meta charset="utf-8">
    <meta name="author" content="ayoub">
    <meta name="description" content="formulaire d'inscription">
    <meta name="keywords" content="inscription, formulaire, ensa">
    <link rel="icon" href="images/icone.png">
    <link rel="stylesheet" href="css/style.css">
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






    <form class="formulaire" method="POST" action="server.php">

        <a href="acceuil.html" class="titre">
            <h1>Se Connecter</h1>
        </a>

        <div class="us">
            <label for="user"><i class="fa fa-user"></i></label>
            <input id="user" type="text" name="user" placeholder="Entrez votre Surnom">
        </div>

        <div class="us">
            <label for="pass"><i class="fa fa-lock"></i></label>
            <input id="pass" type="password" name="motdepasse" placeholder="Entrez votre Motdepasse">
        </div>


        <div><button class="btn" name="connecter" type="submit" >Se connecter</button></div>

    </form>

 



</body>

</html>
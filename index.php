<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Raccourcisseur d'URL</title>

    <link rel="stylesheet" type="text/css" href="view/index.css">
    <link rel="icon" type="image/png" href="view/img/favico.png">
</head>
<body>
    
    <!--  Présentation  -->
    <section id="hello">  
            <!-- Container -->
        <div class="container">
                <!-- Header -->
            <header>
                <img src="view/img/logo.png" alt="logo" id="logo"> 

            </header>

          
            <!-- Proposition de valeur-->
                <h1> Une url longue ? Raccourcissez-là !</h1>
                <h2>Largement meilleur et plus court que les autres.</h2>
            <form method="post" action="../">
                <input type="url" name="url" placeholder="Collez un lien à raccourcir">
                <input type="submit" value="Raccourcir">
            
            </form>
        </div>
    </section>
                    <!-- Section Brands-->

    <section id="brands">
        <div class="container">
            <h3> Ces marques nous font confiance</h3>
            <img src="view/img/1.png" alt="1" class="picture">
            <img src="view/img/2.png" alt="2" class="picture">
            <img src="view/img/3.png" alt="3" class="picture">
            <img src="view/img/4.png" alt="4" class="picture">
        </div>
    </section>

                    <!-- Footer-->

    <footer id="footer">
        <img src="view/img/logo2.png" alt="logo footer" id="logo"></br>
        2021 © Bitly</br>
        <a href="#">Contact</a> - <a href="#">A Propos</a>
    </footer>
        
    
    
</body>
</html>
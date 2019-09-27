<!DOCTYPE html>

<html lang="fr"> 
    
<!-- Head -->
    <head>
        <meta charset="utf-8">
        <title>Mister Cuisto</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/1f74097d51.js"></script>
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
        <!-- MEDIA QUERIES -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <!-- BODY -->
    <body>
            <!-- HEADER -->
            <header>

                <!-- TITRE -->
                <h1> <a href="index.html">Mister Cuisto</a> </h1>

                <!-- MENU -->
                <nav>
                    <ul>
                        <li> <a href="index.html">Accueil</a> </li>
                        <li> <a href="menus.html">Menus</a> </li>
                        <li> <a href="lechef.html">Le Chef</a> </li>
                        <li> <a href="reserver.php">Réserver</a> </li>
                        <li> <a href="contact.html">Contact</a> </li>
                    </ul>
                </nav>
            </header>
            
            <!-- FORMULAIRE RESERVATION -->            
            <div class="flex-item">

                <form action="test.php" method="post" enctype="multipart/form-data">
                    <label for="name">Nom* :</label>
                    <input type="text" required id="name" name="name">
                    <label for="sname">Prénom :</label>
                    <input type="text" id="sname" name="sname">
                    <div>
                        <label for="mail">E-mail* :</label>
                        <input type="email" required id="mail" name="email" placeholder="email@exemple.com" >
                     </div>
        
                        <label for='tele'> Téléphone : </label>
                        <input id="tele" name="tele" type="tel" pattern="[0-9]{10}" maxlength="10" placeholder="0606060606" >
                    <div>
                    <label for="num">Nombre de personnes*</label>
                    <input type="number" required id="num" name="num">
                    </div>
                        <div>
                        <label for="msg">Message (optionnel) :</label>
                        <textarea id="msg" name="msge"></textarea>
                    </div>
                    <div class="button">
                        <button id ="reserver" type="submit">Réserver</button>
                    </div>
                </form>
            <br><br><br>



        <!-- FOOTER -->
        <footer>
                <div id="p_footer">
                    <p class="titre_footer">Mister Cuisto</p>
                    <p>2 Rue du Parc National</p>
                    <p>64260 Arudy</p>
                </div>

                <div id="copyright">
                    <p>© 2019 Mister Cuisto Arudy, Inc.</p>
                </div>

                <div id="restez_connecte">
                    <p class="titre_footer">Reztez connecté</p>
                    <div id="media">
                        <a href="https://fr-fr.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i> </a>
                        <a href="https://twitter.com/?lang=fr" target="_blank"><i class="fab fa-twitter-square"></i> </a>
                        <a href="https://www.instagram.com/?hl=fr" target="_blank"><i class="fab fa-instagram"></i>  </a>
                        <a href="https://www.youtube.com/?gl=FR&hl=fr" target="_blank"><i class="fab fa-youtube"></i> </a>
                        <a href="https://www.tripadvisor.fr/" target="_blank"><i class="fab fa-tripadvisor"></i> </a>
                        
                    </div>

                </div>
            </footer>
    </body>
</html>
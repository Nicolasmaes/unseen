<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/styles.css">
    <link rel="shortcut icon" href="../assets/images/icons/favicon2.png" type="image/x-icon">
    <title>Articles</title>
</head>

<body>
<div class="marge">

    <div class="header">
    <a href="../index.php"><img src="../assets/images/icons/logo2.png" alt=""></a>

        <div class="tool">
            <input class="cocher" type="checkbox" id="nav_button">

            <label for="nav_button" class="croix">x</label>
            <label for="nav_button" class="hamburger">
                <div class="hamburger_icon">
                    <div></div>
                    <div></div>
                </div>
            </label>

            <div class="menu regular_font_text">
                <p> <a href="../index.php">Accueil</a> </p>
                <p> <a href="articles.php">Articles</a> </p>
                <p> <a href="about_us.php">A propos</a> </p>                          
                <p> <a href="contact_us.php">Contact</a> </p>
            </div>
        </div>
    </div>
    

    <div class="container_article font_text">
        <div id="rubriques"> 
            <div class="card" style="width: 18rem;">
                    <h2>Aspect créatif</h2>
                    <img src="../assets/images/icons/cercle.png"alt="...">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button><a href="creative_minds.php">Parcourir</a></button>
            </div> <!-- femrmeture div card -->
            <div class="card" style="width: 18rem;">
                    <h2>Vision hybride</h2>
                    <img src="../assets/images/icons/cercle.png"alt="...">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button><a href="hybrid_minds.php">Parcourir</a></button>
            </div> <!-- femrmeture div card -->
            <div class="card" style="width: 18rem;">
                    <h2>Aspect logique</h2>
                    <img src="../assets/images/icons/cercle.png"alt="...">
                    <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <button><a href="logical_minds.php">Parcourir</a></button>
            </div> <!-- femrmeture div card -->
        </div> <!-- fermeture de la div rubriques -->
    </div>
</div>
</body>
</html>
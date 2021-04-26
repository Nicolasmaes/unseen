<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/styles.css">
    <link rel="shortcut icon" href="../assets/images/icons/un.png" type="image/x-icon">
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
                    <h2 id="blacktext">Aspect créatif</h2>
                    <img src="../assets/images/icons/red.svg"alt="...">
                    <p>Ces métiers qui font appel aux talents créatifs dans tous les sens du terme, de la belle plume au bon coup de crayon. Découvrez-les maintenant !</p>
                    <a href="creative_minds.php" id="btn-rubriques"><div id="red">Parcourir</div></a>
            </div> <!-- femrmeture div card -->
            <div class="card" style="width: 18rem;">
                    <h2 id="blacktext">Vision hybride</h2>
                    <img src="../assets/images/icons/purple.svg" alt="...">
                    <p>L'alliance de la créativité et d'un esprit logique est nécessaire pour exercer les métiers suivants, indispensables pour faire tourner un entreprise du numérique.</p>
                    <a href="hybrid_minds.php" id="btn-rubriques"><div id="purple">Parcourir</div></a>
            </div> <!-- femrmeture div card -->
            <div class="card" style="width: 18rem;">
                    <h2 id="blacktext">Aspect logique</h2>
                    <img src="../assets/images/icons/blue.svg"alt="...">
                    <p>Ces métiers requièrent de la logique, du savoir-être et de l'organisation pour mener à bien chaque étape d'un projet complexes.</p>
                    <a href="logical_minds.php" id="btn-rubriques"><div id="blue">Parcourir</div></a>
            </div> <!-- femrmeture div card -->
        </div> <!-- fermeture de la div rubriques -->
    </div>
</div>
</body>
</html>
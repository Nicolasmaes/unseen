<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/styles.css">
    <link rel="shortcut icon" href="../assets/images/icons/un.png" type="image/x-icon">
    <title>La cryptographie</title>
</head>

<body>
<div class="marge">

    <div class="header">
    <a href="../index.php" target="_blank"> <img src="../assets/images/logo_unseen.svg" alt=""> </a>
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
                <div class="barre"></div>                            
                <p> <a href="contact_us.php">Contact</a> </p>
            </div>
        </div>
    </div>


    <div class="container_article font_text">
        <div>
            <div class="big_title">
                <h1> La cryptographie ou l'art du secret </h1>
                <p> Article réalisé et rédigé par <a href="https://github.com/Adrien-Ray" target="_blank"> <span class="lightgrey">Adrien R.</span></a></p>
            </div>

            <p>
                La cryptographie regroupe les disciplines ayant pour but de rechercher des moyens d’assurer la protection de données. Cela inclu : <br><br>
                <span class="line">
                la confidentialité : empêcher la lecture d’un message par une personne non-autorisée. <br>
                l’authenticité : permettre de « signer » un message pour assurer qu’il est envoyé par la bonne personne. <br>
                l’intégrité : mise en place de protocoles permettant de vérifier que le message n’a pas été modifié de manière frauduleuse. <br>
                </span>
            </p>

            <img src="../assets/images/pictures/photo_19.jpg" alt="">

            <p>
                <span class="bold">
                Lexique :
                </span> <br><br>

                <span class="line">
                chiffrement : remplacer les caractère d’un texte « en claire » par d’autre pour le rendre illisible. <br>
                cryptosystème : algorithme de chiffrement. <br>
                crptanalyse : science de l’étude des messages chiffrés en vue de leur déchiffrement. <br>
                cryptologie : science regroupant la cryptographie et la cryptanalyse. <br>
                </span>
            </p>
        </div>  

        <div>
            <h2 class="red"> La cryptographie dans le numérique </h2>

            <p>
                Dans le numérique, la cryptographie est omniprésente. D’abord utilisé dans les communications militaires, puis dans les messages relevants du secret d’état en général ( <span class="lightgrey">sphère diplomatique</span> ). Elle s’est continuellement perfectionné et démocratisé. En effet, les secteurs bancaires et industriels ont rapidement compris que la posession de technologies fiables serait vitale, pour sécuriser les informations bancaires et contrer l’espionnage industriel. Aujourd’hui, sur internet, le simple fait de rentrer sur un espace personel demande par exemple : <br><br>

                un procédé cryptographique de certification du domaine ( <span class="lightgrey">pour s’assurer que l’on ne se trouve pas sur un faux site destiné à voler notre mot de passe via le formulaire d’entrée</span> ). <br><br>

                un procédé cryptographique pour rendre identifiants et mots de passe illisible à un attaquant qui interceperait la communication. <br><br>

                un procédé cryptographique pour rendre illisible les pages qui s’échangeront après authentification, puisque celles-ci pourront avoir pour contenu ce qui est censé être protégé par le mot de passe.
            </p>

            <img src="../assets/images/pictures/photo_20.jpg" alt="">
        </div> 

        <div>   
            <h2 class="red"> La cryptographie dans les métiers du numérique </h2>

            <p class="line">
                
                <span class="bold">Developpeur cryptgraphe</span> <br>
                <span class="lightgrey">Developpeur spécialisé dans le cryptage des données sensibles.</span> <br><br>
               
                
                <span class="bold">Analyste en sécurité</span> <br>
                <span class="lightgrey">Vérifie que les systemes de sécurité d’une entreprise/d’un réseau fonctionnent et répondent aux standards actuels.</span> <br><br>
                
                <span class="bold">Ingénieur en sécurité</span> <br>
                <span class="lightgrey">Métier consistant a élaborer la sécurité d’un réseau (proche d'analyste en sécurité, qui prend en quelque sorte la suite des opérations).</span> <br><br>
                
                <span class="bold">Consultant en sécurité</span> <br>
                <span class="lightgrey">Il s’agit fréquement d’une personne/organisme exterieur qui donne des conseils, des recommandations et aide a la mise en place de ceux-ci.</span> <br><br>
                
                <span class="bold">Pentester</span> <br>
                <span class="lightgrey">Le pentesteur cherche des failles de sécurité dans le but de les corriger. En claire, il s’agit de faire le travail d’un pirate pour régler les failles avant qu’un réel pirate ne les exploite. Le pentester est souvent confronté à la cryptographie, il peut être notament utile qu’il soit formé à la cryptanalyse. ( voir Le Pentesteur ou le Corsaire des Hackers, sur l'article de Williams)</span> <br><br>
                
                <span class="bold">Technicien réseau</span> <br>
                <span class="lightgrey"></span>Le technicien réseau peut être amené à gérer la sécurité des serveurs et des données échangés, il peut donc aussi lui être demandé d’avoir des compétences en cryptologie.</span> <br><br>
                
                <span class="bold">Cryptologue</span> <br>
                <span class="lightgrey">Cryptologue n’est pas un métier que l’on est amené à trouver fréquemment dans une entreprise. Il s’agit en fait plus d’un mathématicien (voir d’un physicien) qui invente de nouvelles méthodes de cryptage (voire qui cherche les méthodes permettant de casser le code sans la clef). Il existe de nombreuses sous-disciplines dans ce domaine (Cryptanalyse, Cryptographie symétrique, Cryptographie asymétrique, Cryptographie quantique et post-quantique).</span> <br><br>
            </p>
        </div>

        <div>
            <h2 class="red"> Conclusion </h2>
            <p>
                La cryptologie regroupe un grand nombre de compétences. De même, il existe une grande variété de métiers dans lesquels il peut être nécessaire d’avoir des notions de cryptographie. A partir du moment ou un système, un réseau, une entreprise manipule des données dont la lecture sans autorisation peut être convoitée, il est nécessaire qu’une personne compétente dans ce domaine réfléchisse à la mise en place et la maintenance des systèmes cryptographiques.
            </p>
        </div>

        <p> Première photo par <a href="https://unsplash.com/@markusspiske" target="_blank"> <span class="lightgrey"> Markus Spiske </span> </a> - Seconde photo par <a href="https://unsplash.com/@techdailyca" target="_blank"> <span class="lightgrey"> Tech Daily </span> </a>. <br> </p> 
    </div>  

</div>
</body>
</html>
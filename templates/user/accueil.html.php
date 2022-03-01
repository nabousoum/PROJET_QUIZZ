
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>accueil</title>
        <link rel="stylesheet" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.accueil.css" ?>">
    </head>
    <body>
       <div id="entete">
           <!-- <img id="imgLogo" src="img/Icônes/logo-QuizzSA.png" alt=""> -->
            <h1>Le plaisir de jouer</h1>
        </div>
        <div id="main">
            <div id="container">
               <div id="top">
                    <h2>CRÉER ET PARAMETREZ VOS QUIZZ</h1>
                    <button onclick="window.location.href = '<?= WEB_ROOT."?controller=securite&action=deconnexion" ?>';">Déconnexion</button>
               </div>
               <div id="bottom">
                    <div id="left">
                        <div id="left-top">
                            <img id="img1" src="img/avatar.jpeg" alt="">
                            <p>AAAA BBBB</p>
                        </div>
                        <div id="left-bottom">
                            <div class="hov"  id="listeQuestion">
                                <a href="#">Liste Questions</a>
                                <img id="img2" src="img/Icônes/ic-liste.png" alt="">
                            </div>
                            <div class="hov" id="creerAdmin">
                                <a href="<?= WEB_ROOT."?controller=user&action=creer.admin" ?>">Créer Admin</a>
                                <img id="img3" src="img/Icônes/ic-ajout.png" alt="">
                            </div>
                            <div class="hov" id="listerJoeur">
                                <a href="<?= WEB_ROOT."?controller=user&action=liste.joueur" ?>">Lister Joueur</a>
                                <img id="img4" src="img/Icônes/ic-liste-active.png" alt="">
                            </div>
                            <div class="hov" id="creerQuestion">
                                <a href="">Créer Questions</a>
                                <img id="img5" src="img/Icônes/ic-liste.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="right">   
                     
                    </div>
               </div>
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>accueil</title>
        <link rel="stylesheet" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.enregistrerAdmin.css" ?>">
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
                    <button id="btn1" onclick="window.location.href = '<?= WEB_ROOT."?controller=securite&action=deconnexion" ?>';">Déconnexion</button>
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
                                <img id="img4" src="img/Icônes/ic-liste.png" alt="">
                            </div>
                            <div class="hov" id="creerQuestion">
                                <a href="">Créer Questions</a>
                                <img id="img5" src="img/Icônes/ic-ajout.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="right">   
                        <div id="formulaire">
                                <form id="form" action="#" method="POST">
                                <input type="hidden" name="controller" value="user">
                                <input type="hidden" name="action" value="inscriptionAdmin">
                            
                                <div class="form-control">
                                    <label><b>PRENOM</b></label>
                                    <input id="prenom" type="text" placeholder="AAAAA" name="prenom" >
                                    <small>Error message</small>
                                </div>
                                <div class="form-control">
                                    <label><b>NOM</b></label>
                                    <input id="nom" type="text" placeholder="BBBBB" name="nom" >
                                    <small>Error message</small>
                                </div>
                                <div class="form-control">
                                    <label><b>LOGIN</b></label>
                                    <input id="login" type="text" placeholder="abababab" name="login" >
                                    <small>Error message</small>
                                </div>
                                <div class="form-control">
                                    <label><b>PASSWORD</b></label>
                                    <input id="password" type="password" placeholder="Password" name="password" >
                                    <small>Error message</small>
                                </div>
                                <div class="form-control">
                                    <label><b>CONFIRM PASSWORD</b></label>
                                    <input id="password2" type="password" placeholder="Confirm Password" name="confirmPassword" >
                                    <small>Error message</small>
                                </div>

                                <button class="fot-btn2">Créer compte</button>
                            
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <script src="<?= WEB_PUBLIC."js/script.enregistrerAdmin.js" ?>"></script>
    </body>
</html>
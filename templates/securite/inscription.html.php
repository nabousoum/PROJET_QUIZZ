<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>inscription</title>
        <link rel="stylesheet" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.inscription.css" ?>" media="screen" type="text/css" />
    </head>
    <body>
       <div id="entete">
            <h1>Le plaisir de jouer</h1>
        </div>
        <div id="main">
            <div id="container">
               <div id="left">
                    <div id="text">
                        <h2>S'INSCRIRE</h2>
                        <h2 id="h2oc">Pour tester votre niveau de culture générale</h2>
                    </div>
                    <div id="formulaire">
                            <form id="form" action="#" method="POST">
                            <input type="hidden" name="controller" value="user">
                            <input type="hidden" name="action" value="inscription">
                         
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
                            <div id="fot">
                                <h2>Avatar</h2>
                                <!-- <input type="file" name="file" id=""> -->
                                <button class="fot-btn">Choisir un fichier</button>
                            </div>

                            <button class="fot-btn2">Créer compte</button>
                            
                        
                        </form>
                    </div>
               </div>
               <div id="right">
                        <img src="img/avatar.jpeg" alt="">
                        <h3>Avatar du joueur</h3>
               </div>
            </div>
        </div>
        <script src="<?= WEB_PUBLIC."js/script.inscription.js" ?>"></script>
    </body>
</html>
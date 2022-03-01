<?php 
    if (isset($_SESSION['errors'])){
        $errors = $_SESSION['errors'];
        unset($_SESSION['errors']);
    }
   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quizz accueil</title>
        <link rel="stylesheet" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.connexion.css" ?>" media="screen" type="text/css" />
    </head>
    <body>
            <div id="entete">
                <h1>Le plaisir de jouer</h1>
            </div>
            <div id="main">
                <div id="container">
                    <form id="form" action="<?= WEB_ROOT ?>" method="POST">
                        <input type="hidden" name="controller" value="securite">
                        <input type="hidden" name="action" value="connexion">
                        <div id="loginForm">
                            <h1>Connexion</h1>
                            <span>X</span>
                        </div>
                        <?php if(isset($errors['connexion'])): ?>
                            <small style="color:red"> <?= $errors['connexion']; ?> </small>
                        <?php endif ?><br>
                        <div class="form-control">
                            <label><b>LOGIN</b></label>
                            <input id="login" type="text" placeholder="Login" name="login" >
                        </div>
                        <?php if(isset($errors['login'])): ?>
                            <small style="color:red"> <?= $errors['login']; ?> </small>
                        <?php endif ?><br>

                        <div class="form-control">
                            <label><b>PASSWORD</b></label>
                            <input id="password" type="password" placeholder="Password" name="password" >
                        </div>
                        <?php if(isset($errors['password'])): ?>
                            <small style="color:red"> <?= $errors['password']; ?> </small>
                        <?php endif ?><br>
            
                        <div id="footer">
                            <input type="submit" id='submit' value='CONNEXION' >
                            <a href="<?= WEB_ROOT."?controller=securite&action=inscription" ?>">S inscrire pour jouer?</a>
                        </div>
                    
                    </form>
                </div>
            </div>
    <script src="<?= WEB_PUBLIC."js/script.connexion.js" ?>"></script>
    </body>

</html>
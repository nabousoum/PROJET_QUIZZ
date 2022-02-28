<?php require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.html.php");
ini_set('display_errors','on');
?>
    <ul>
        <li><a class="active" href="<?= WEB_ROOT."?controller=user&action=accueil" ?>">ACCUEIL</a></li>
        <?php if(is_admin()): ?>
            <li><a href="<?= WEB_ROOT."?controller=user&action=liste.joueur" ?>">liste des joueurs</a></li>
        <?php endif ?>
        <li><a href="<?= WEB_ROOT."?controller=securite&action=deconnexion" ?>">DECONNEXION</a></li>
     </ul>

bienvenue au jeu
<?php require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.html.php"); ?>jeuu
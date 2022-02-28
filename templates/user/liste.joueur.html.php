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


        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Liste des Joueurs</h3>
                    <i class='bx bx-search' ></i>
                    <i class='bx bx-filter' ></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Nom et Prenom</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $value):?>
                            <tr>
                                <td>
                                <img src="">
                                <p><?=$value['nom_complet']?></p>
                                </td>
                                <td><?=$value['score']?></td>
                            </tr>
                        <?php endforeach?>
                </tbody>
                </table>
            </div>
        </div>
<?php require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.html.php"); ?>
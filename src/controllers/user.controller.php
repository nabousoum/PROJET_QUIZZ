<?php
 require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");


ini_set('display_errors','on');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['action'])){
            if($_REQUEST['action']=='connexion'){
                
            }
            elseif($_POST['action']=='inscription'){
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $login = $_POST['login'];
                $password = $_POST['password'];
                insert_users($nom,$prenom,$login,$password);
                header("location:".WEB_ROOT);
            }
            elseif($_POST['action']=='inscriptionAdmin'){
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $login = $_POST['login'];
                $password = $_POST['password'];
                insert_admin($nom,$prenom,$login,$password);
                header("location:".WEB_ROOT."?controller=user&action=creer.admin");
            }
        }
    }

    if($_SERVER['REQUEST_METHOD']=="GET"){
        if(isset($_GET['action'])){
            if(!is_connect()){
                header("location:".WEB_ROOT);
                exit();
            }
            if($_REQUEST['action']=='accueil'){
                if(is_admin()){
                    require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
                }
                elseif (is_player()) {
                    jeu();
                } 
               //require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
            }
            elseif($_REQUEST['action']=="liste.joueur"){
                lister_joueur();
            }
            elseif($_REQUEST['action']=="creer.admin"){
                creer_admin();
            }
            elseif($_REQUEST['action']=="creer.question"){
                creer_question();
            }
            else{
                require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."pageErreur.html.php");
            }
        }
    }

    function lister_joueur(){
        //ob_start();
            $data = find_users("ROLE_JOUEUR");
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php");
        //$content_for_views = ob_get_clean();
        //require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
    }
    function jeu(){
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."jeu.html.php");
    }
    function creer_admin(){
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."enregistrerAdmin.html.php");
    }
    function creer_question(){
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."creerQuestion.html.php");
    }
<?php
ini_set('display_errors','on');
 require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['action'])){
            if($_REQUEST['action']=='connexion'){
            
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
                /* if(is_admin()){
                    lister_joueur();
                }
                elseif (is_player()) {
                    jeu();
                } */
               require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueil.html.php");
            }
            elseif($_REQUEST['action']=="liste.joueur"){
                lister_joueur();
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
<?php
  require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.model.php");
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['action'])){
            if($_REQUEST['action']=='connexion'){
               $login = $_POST['login'];
               $password = $_POST['password'];
               connexion($login,$password);
            }
        }
    }

    if($_SERVER['REQUEST_METHOD']=="GET"){
       
         if(isset($_GET['action'])){
            if($_REQUEST['action']=='inscription'){ 
                require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."inscription.html.php");
            }
            elseif($_REQUEST['action']=='deconnexion'){
                logout();
            }
            elseif($_REQUEST['action']=='connexion'){
                require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            }
            else{
                require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."pageErreur.html.php");
            }
        }
        else{
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
        } 
    }
    
    function connexion(string $login,string $password){
        $errors = [];
        champ_obligatoire('login',$login,$errors,"login obligatoire");
        champ_obligatoire('password',$password,$errors,"password obligatoire");
        if(count($errors)==0){
            valid_email('login',$login,$errors);
            valid_password('password',$password,$errors);
        }
        if(count($errors)==0){
           $user = find_user_login_password($login,$password);
           if(count($user)!=0){
                $_SESSION['user-connect'] = $user;
                header("location:".WEB_ROOT."?controller=user&action=accueil");
                exit();
           }
           else{
               $errors['connexion']= "Login ou mot de passe incorect";
                $_SESSION['errors'] = $errors;
                header("location:".WEB_ROOT);
                exit();
           }
        }
        else {
            $_SESSION['errors'] = $errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }
    function logout(){
        session_destroy();
        header("location:".WEB_ROOT);
        exit();
    }
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
            if($_REQUEST['action']=='connexion'){
                echo "traiter le formulaire de connexion";
            }
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
           }
           else{
               $errors['connexion']= "Login ou mot de passe incorect";
                $_SESSION['errors'] = $errors;
           }
        }
        else {
            $_SESSION['errors'] = $errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }
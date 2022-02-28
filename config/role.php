<?php 
    function is_connect():bool{
        return isset($_SESSION['user-connect']);
    }
    function is_player():bool{
        return is_connect() && $_SESSION['user-connect']['role']=="ROLE_JOUEUR";
    }
    function is_admin():bool{
        return is_connect() && $_SESSION['user-connect']['role']=="ROLE_ADMIN";
    }
?>
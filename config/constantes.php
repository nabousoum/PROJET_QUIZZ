<?php 
   
    define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
   
    define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
   
    define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);
    
    define("PATH_DB",ROOT."data/db.json");

    define("WEB_ROOT","http://127.0.0.1/PROJET_QUIZ/public/");

    define("PATH_POST","http://localhost:8001");
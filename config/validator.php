<?php
    function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
        if(empty($data)){
            $errors[$key]=$message;
        }
    }
    function valid_email(string $key,string $data,array &$errors,string $message="email invalid"){
        if (!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $data)){
            $errors[$key]=$message;
        }
    }
    function valid_password(string $key,string $data,array &$errors,string $message="password invalid"){
        $number = preg_match('/[0-9]/', $data);
        $letter = preg_match('/[a-zA-Z]/', $data);
        if(strlen($data) < 6 || !$number || !$letter) {
            $errors[$key]=$message;
        }
    }

   
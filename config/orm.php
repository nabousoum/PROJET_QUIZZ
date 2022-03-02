<?php
    function json_to_array(string $key):array{
        $dataJson=file_get_contents(PATH_DB);
        $data=json_decode($dataJson,true);
        return $data[$key];
    }
    //$dataJson=file_get_contents(PATH_DB);
    
    function array_to_json(string $key,array $tabArray){
        $array[$key] = json_to_array("users");
        $array[$key][] = $tabArray; 
        $finalData = json_encode(["users"=>$array[$key]],JSON_PRETTY_PRINT);
        file_put_contents(PATH_DB,$finalData);
    }
   
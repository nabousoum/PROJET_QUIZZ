<?php
    function json_to_array(string $key):array{
            $dataJson=file_get_contents(PATH_DB);
            $data=json_decode($dataJson,true);
            return $data[$key];
    }
   $dataJson=file_get_contents(PATH_DB);
    
    function array_to_json(string $key,array $data):array{
        $dataJson = json_encode($data[$key],true);
        file_put_contents(PATH_DB,$dataJson);
    }
   
<?php
    function read_file($filename){
        // $content = file_get_contents('../../database/'. $filename .'.json');
        $content = file_get_contents('C:/xampp/htdocs/jasapengiriman/database/'. $filename .'.json');
        $array = json_decode($content, true);
        return $array;
    }


?>
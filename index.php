<?php

date_default_timezone_set("America/Bogota");
ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);


try{
    
    $url = isset($_GET['url'])?$_GET['url']:'que-es';
    $fileName = ROOT . 'views' . DS . $url . '.php' ;

    if(is_readable($fileName)){     
      
        $title = str_replace("-", " ", $url);
        $modify = "modify";
        require_once ROOT . 'layout' .DS . 'default.php';               
    }else{
        throw new Exception("Error 404 pagina no existe: ". $_GET['url'] , 1);         
    }    
}
catch(Exception $e){
    echo $e->getMessage();  
}	
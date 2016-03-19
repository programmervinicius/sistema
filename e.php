<?php
$var='2';
try{
    if($var == 1){
    echo'ok es igual 1';    
    } else if($var == 2) {
        throw new Exception('EROOR: var es igual dos');
    } else {
        throw new Exception('EROOR: var es igual dos ni a uno');
        
    }
    
    
}catch(Exception $e){
  echo 'error';
}

?>
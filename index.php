<?php
$view = isset($_GET['view']) ? $_GET['view']: 'index';
require('core/libs/smarty/Smarty.class.php');
if(file_exists('core/controllers/'.$view.'Controller.php')){
    
    include('core/controllers/'.$view.'Controller.php');
    
}else{
    include('core/controllers/errorController.php');
}


?>

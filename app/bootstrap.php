<?php 
// load config
require_once "config/config.php";

// load Helpers
require_once 'helpers/url_helper.php';
 

// autoload Core libraries
spl_autoload_register(function($classname){
    require_once "libraries/$classname.php";
    
}); 
<?php

spl_autoload_register(function($class){
    
    $prefix = "Source\\";
    $baseDir = __DIR__ . '/';
    $len = strlen($prefix);
    
    if(strncmp($prefix, $class, $len) !== 0):
        return;
    endif;
    
    $relativeClass = substr($class, $len);    
    $file = $baseDir . str_replace("\\", "/", $relativeClass) . ".php";
    
    if(file_exists($file)):
        require $file;
    endif;
    
});
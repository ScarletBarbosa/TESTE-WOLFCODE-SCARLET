<?php

    $print = function($class){
        if (file_exists('classes/'.$class.'.php')) {
            include_once('classes/'.$class.'.php');
        }
    };

    spl_autoload_register($print);

    define('HOST','127.0.0.1');
    define('DATABASE','wolfcode');
    define('USER','root');
    define('PASSWORD','')
?>
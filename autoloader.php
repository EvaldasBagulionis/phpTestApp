<?php
//Loads config file
$configs = include('config.php');

//Autoloads used class files from classes folder
spl_autoload_register(function ($class) {
    $filename='./classes/'.$class.'.class.php';
    if (!file_exists($filename)) {
        return false;
    }
    include $filename;
});

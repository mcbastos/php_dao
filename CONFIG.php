<?php

/*
 * Seção 13 - Aula 62
 *  - PDO
 *  - - DAO (Data Access Object)
 */

spl_autoload_register(function($class_name) {

    $filename = "CLASS" . DIRECTORY_SEPARATOR . $class_name . ".php";

    if (file_exists($filename)) {
        require_once($filename);
    }
});
?>


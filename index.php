<?php

/*
 * Seção 13 - Aula 62
 *  - PDO
 *  - - DAO (Data Access Object)
 */

require_once("CONFIG.php");

$root = new Usuario();

$id = "3";

$root->loadById($id);

echo $root;


// RECUPERA REGISTROS DO BANCO DE DADOS ****************************************

//$sql = new Sql();
//
//$rawQuery = "SELECT * FROM tb_usuarios";
//
//$usuarios = $sql->select($rawQuery);
//
//echo json_encode($usuarios);



?>

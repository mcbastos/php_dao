<?php

/*
 * Seção 13 - Aula 62
 *  - PDO
 *  - - DAO (Data Access Object)
 */

require_once("CONFIG.php");

$sql = new Sql();

$rawQuery = "SELECT * FROM tb_usuarios";

$usuarios = $sql->select($rawQuery);

echo json_encode($usuarios);

?>

<?php

/*
 * Seção 13 - Aula 62
 *  - PDO
 *  - - DAO (Data Access Object)
 */

class Usuario {

    private $id_usuario;
    private $id_login;
    private $id_senha;
    private $id_dtcadastro;

    public function getIdusuario() {
        return $this->id_usuario;
    }

    public function setIdusuario($value) {
        $this->id_usuario = $value;
    }

    public function getIdlogin() {
        return $this->id_login;
    }

    public function setIdlogin($value) {
        $this->id_login = $value;
    }

    public function getIdsenha() {
        return $this->id_senha;
    }

    public function setIdsenha($value) {
        $this->id_senha = $value;
    }

    public function getIddtcadastro() {
        return $this->id_dtcadastro;
    }

    public function setIddtcadastro($value) {
        $this->id_dtcadastro = $value;
    }

    public function loadById($id) {

        $sql = new Sql();

        $rawQuery = "SELECT * FROM tb_usuarios WHERE id_usuario = :id";

        $results = $sql->select($rawQuery, array(
            ":id" => $id
        ));

        if (count($results) > 0) {
            $row = $results[0];

            $this->setIdusuario($row['id_usuario']);
            $this->setIdlogin($row['id_login']);
            $this->setIdsenha($row['id_senha']);
            $this->setIddtcadastro(new DateTime($row['id_dtcadastro']));
        }
    }

    public function __toString() {
        return json_encode(array(
            "id_usuario" => $this->getIdusuario(),
            "id_login" => $this->getIdlogin(),
            "id_senha" => $this->getIdsenha(),
            "id_dtcadastro" => $this->getIddtcadastro()->format("d/m/Y H:i:s")
        ));
    }

}

?>
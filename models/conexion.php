<?php

class Conexion{

    public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=php_user_management","root","");

        return $link;
    }
}

?>
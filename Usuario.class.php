<?php

require 'usuario.class.php';

$usuario = new Usuario();
$conecta = $usuario->conn();

    if ($conecta){
        $user = $usuario->checkUser("admin@gmail.com");
        if ($user){
            echo "P A R A B É N S ! Usuario existe no banco de dados";
        }else{
            echo "Não existe usuário com esse email cadastrado no banco!";
        }

        }else{
            echo  "<h1> Erro ao conectar. Tente mais tarde!";

    }
<?php

require 'usuario.class.php';

$usuario = new Usuario();
$conecta = $usuario->coon();

    if ($conecta){
            $user = $usuario->checkUser("admin@gmail.com");
            if ($user){
                echo "P A R A B É N S ! Usuario existe no banco de dados";
            }else{
                echo "Não existe usuário com esse email cadastrado no banco!";
        }

            $pass = $usuario->checkPass("admin@gmail.com", "123");
            if($user){
                echo "<script>alert('Usuario e senha cadastrados')</script>";
            }else{
                "<script>alert('Não encontrei Usuario e senha cadastrados')</script>";
            }

            }else{
                echo  "<h1> Erro ao conectar. Tente mais tarde!";

    }
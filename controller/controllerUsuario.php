<?php

require_once "../config/database.php";
require_once "../model/Usuario.php";

class ControllerUsuario{

    public function conectar(){
        $bd = new Banco();
        return $bd = $bd->conectar();
    }

    public function cadastrarUsuario($nome, $nascimento, $email, $senha){

        $conexao = $this->conectar();
        $usuario = new Usuario($this->create());
        
        $usuario->nome = $nome;
        $usuario->nascimento = $nascimento;
        $usuario->email = $email;
        $usuario->senha = $senha;

        
        // $("INSERT INTO {$this->tabela}(nome, data_nasc, email, senha, endereco) VALUES('{$this->nome}', '{$this->nascimento}', '{$this->email}', '{$this->senha}')");
        // $b->bindParam(":var", $var);
        // $b->execute();


        if($usuario->create()){
            echo '<script> alert("Usuario Cadastrado com sucesso"); </script>';
            header('Location: index.php?acao=usuario');
        }
    }

    public function logarUsuario($email, $senha){
        $usuario = new Usuario($this->conectar());
        $usuario->email = $email;
        $usuario->senha = $senha;
        $resultado = $usuario->read()->fetch_assoc();
        $usuario->id = $resultado['id'];

        if($senha != $resultado['senha']){
            echo '<script>alert("Senha incorreta");<script>';
        }else{
            session_start();
            $_SESSION['usuario_id'] = $resultado['id'];
            header("Location: index.php?acao=usuario&usuario={$usuario->id}");
        }
    }
}
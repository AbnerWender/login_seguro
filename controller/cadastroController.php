<?php

require_once '../../config/database.php';
require_once '../../model/usuario.php';

class CadastroController{
    protected $banco;
    protected $usuario;

    public function __construct()
    {
        $this->banco = new Banco();
        $this->usuario = new Usuario($this->banco->conectar());
    }

    public function cadastrarUsuario($nome, $data_nasc, $email, $senha){
        $this->usuario->nome = $nome;
        $this->usuario->data_nasc = $data_nasc;
        $this->usuario->email = $email;
        $this->usuario->senha = $senha;

        if ($this->usuario->cadastrar()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar.";
        }
    }
}
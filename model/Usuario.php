<?php

class Usuario{
    private $conexao;
    private $tabela = "usuario";

    protected $id;
    protected $nome;
    protected $nascimento;
    protected $email;
    protected $senha;

    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function create(){
        $query = "INSERT INTO {$this->tabela}(nome, data_nasc, email, senha, endereco) VALUES('{$this->nome}', '{$this->nascimento}', '{$this->email}', '{$this->senha}');";
        $resultado = $this->conexao->conectar($query);        
        return $resultado;
    }
}
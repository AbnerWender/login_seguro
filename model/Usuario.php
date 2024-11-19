<?php
require_once "../../config/database.php";

class Usuario{

    public $conexao;
    public $tabela = "usuario";

    public $id;
    public $nome;
    public $data_nasc;
    public $email;
    public $senha;

    public function __construct($bd){
        $this->conexao = $bd;
    }

    public function getIdUsuario($id){
        $query = "SELECT * FROM {$this->table} WHERE id = {$this->$id}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MSQLI_ASSOC);
    }

    public function cadastrar(){
        $this->senha = password_hash($this->senha, PASSWORD_DEFAULT);
        
        $query = "INSERT INTO {$this->table} (nome, data_nasc, email, senha) VALUES ('{$this->nome}','{$this->data_nasc}', '{$this->email}','{$this->senha}');";

        return $this->conexao->query($query);
    }

    public function logar(){
        $query = "SELECT * FROM {$this->table} WHERE email = ? LIMIT 1";
        $stmt = $this->conexao->prepare($query);
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0){
            $usuario = $resultado->fetch_assoc();
            if (password_verify($this->senha, $usuario['senha'])){
                return true;
            }
        }
        return false;
    }

    public function __destruct(){
        if ($this->conexao) {
            $this->conexao->close();
        }
    }

}
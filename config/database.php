<?php 

class Banco{
    const host = 'localhost';
    const banco = 'seguranca';
    const usuario = 'root';
    const senha = '';
    protected $conexao;

    protected function conectar(){
        $this->conexao = new mysqli(self::host, self::usuario, self::senha, self::banco);
        if(!$this->conexao){
            echo 'erro na conexao';
        }else{
            return $this->conexao;
        }
    }
    public function desconectar(){
        $this->conexao = $this->conexao->close();
    }
}
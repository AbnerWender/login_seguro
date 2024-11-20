<?php

require_once '../../controller/cadastroController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao){
    case 'cadastrar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuarioController = new CadastroController();
            $usuarioController->cadastrarUsuario($_POST['nome'], $_POST['data_nasc'], $_POST['email'], $_POST['senha']);
        } else {
            echo "Método de requisição inválido.";
        }
        break;

    // default:
    //     include '../../view/templates/forms/formCadastro.php';
}
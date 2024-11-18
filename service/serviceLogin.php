<?php

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao){
    case 'login':
        require_once './controller/controllerUsuario.php';
        $controller = new ControllerUsuario();
        $controller->logarUsuario($_POST['usuario'], $_POST['senha']);
        break;
    case 'cadastrar-usuario':
        require_once '../controller/controllerUsuario.php';
        
        $nome = htmlspecialchars($_POST['nome']);
        $nascimento = htmlspecialchars($_POST['nascimento']);
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);

        $controller = new ControllerUsuario();
        $controller->cadastrarUsuario($nome, $nascimento, $email, $senha);
        break;
    default:
        require_once 'view/pages/Login.php';
}
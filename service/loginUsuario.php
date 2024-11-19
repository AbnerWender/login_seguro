<?php

require_once './controller/loginController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao)
{
    case 'login':
        $loginController = new LoginController();
        $loginController->login($_POST['email'], $_POST['senha']);
        break;
    default:
        include '../view/templates/forms/formLogin.php';
}
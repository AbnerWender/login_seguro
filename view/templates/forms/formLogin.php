<form action="index.php?acao=login" method="post">
    <div>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario">
    </div>

    <div>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
    </div>

    <div>
        <label for="cadastrar">Não possui login? <a href="view/pages/Cadastro.php">Faça cadastro</a></label>
    </div>

    <input type="submit" value="Entrar">
</form>
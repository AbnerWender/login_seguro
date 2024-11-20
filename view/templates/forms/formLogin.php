<link rel="stylesheet" href="./view/css/login.css">

<section class="login-screen">

    <form action="index.php?acao=login" method="post" id="form-login">
        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
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
</section>
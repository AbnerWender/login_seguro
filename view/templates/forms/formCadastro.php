<form action="Cadastro.php?acao=cadastrar-usuario" method="post">
    <div class="row-input">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
    </div>

    <div class="row-input">
        <label for="nascimento">Data de Nascimento:</label>
        <input type="date" name="nascimento" id="nascimento">
    </div>

    <div class="row-input">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" require>
    </div>

    <div class="row-input">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <button onclick="togglePassword(event, this)" id="btn-password">Ver Senha</button>
    </div>

    <input type="submit" value="Cadastrar">
</form>

<script>
    function togglePassword(event, button) {
    event.preventDefault();
    const senha = document.getElementById("senha");

    if (senha.getAttribute("type") === "password") {
        senha.setAttribute("type", "text");
        button.textContent = "Ocultar Senha";
    } else {
        senha.setAttribute("type", "password");
        button.textContent = "Ver Senha";
    }
}
</script>
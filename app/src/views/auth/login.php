<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoinKeeper - Login</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="<?= css_directory("/auth/login.css"); ?>">
</head>

<body class="align">

    <div class="grid">

        <form action="https://httpbin.org/post" method="POST" class="form login">

            <div class="form__field">
                <label for="login__username">
                    <i class="ph ph-user"></i>
                    <span class="hidden">Usuário</span>
                </label>
                <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Usuário" required>
            </div>

            <div class="form__field">
                <label for="login__password">
                    <i class="ph ph-lock-key"></i>
                    <span class="hidden">Senha</span>
                </label>
                <input id="login__password" type="password" name="password" class="form__input" placeholder="Palavra Chave" required>
            </div>

            <div class="form__field">
                <input type="submit" value="Entrar">
            </div>

        </form>

        <p class="text--center" style="display: flex; align-items: center; justify-content: center; margin-bottom: 0;">Esqueceu a sua senha? <a href="#" style="margin-left: 8px;">Recuperar</a> <i class="ph ph-arrow-right" style="margin-left: 8px;"></i></p>

        <p class="text--center" style="display: flex; align-items: center; justify-content: center; margin-top: 0;">Não possui conta? <a href="#" style="margin-left: 8px;">Cadastrar-se</a> <i class="ph ph-arrow-right" style="margin-left: 8px;"></i></p>

    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StockMaster</title>
    <link rel="shortcut icon" href="img/stockmasterIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="stylesheets/login-cadastro.css">
</head>
<body>
    <article>
        <div class="logo">
            <img src="img/stockmasterLogo.png" alt="Logo da StockMaster">
        </div>
        <form method="POST" action="Stockmaster.php">
            <?php
        include_once "Conectar.mysql.php";
        // Exibe mensagens de erro, se houver
        if (isset($_GET['erro'])) {
            $erros = [
                1 => "E-mail não encontrado.",
                2 => "Senha incorreta.",
                3 => "Preencha todos os campos."
            ];
            $codigo = intval($_GET['erro']);
            if (isset($erros[$codigo])) {
                echo "<p class='erro'>{$erros[$codigo]}</p>";
            }
        }
        ?>
            <div class="formulario-login">
                <p><label for="email">Email: </label>
                    <input type="email" name="email" required>
                </p>
            </div>
            <div class="formulario-login">
                <p><label for="senha">Senha: </label>
                    <input type="password" name="senha" required>
                </p>
            </div>
            <input type="submit" value="ENTRAR">
        </form>
    </article>
</body>
</html>

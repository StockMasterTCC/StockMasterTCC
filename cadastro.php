<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="stylesheets/login-cadastro.css">
    <link rel="icon" href="img/stockmaster.png" type="image/png">
</head>
<body>
    <article>
        <div class="logo">
            <img src="img/StockMasterLogo.png" alt="Logo da StockMaster">
            <?php
                $mensagem = "";
                if ($mensagem):
            ?>
                <div class="mensagem"><?= htmlspecialchars($mensagem) ?></div>
            <?php endif; ?>
            <form method="POST" action="">
                <?php
    include "Conectar.mysql.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"] ?? '');
    $senha = $_POST["senha"] ?? '';
    $sobrenome = trim($_POST["sobrenome"] ?? '');
    $nome = trim($_POST["nome"] ?? '');

    if (empty($email) || empty($senha) || empty($sobrenome) || empty($nome)) {
        $mensagem = "Erro: Todos os campos são obrigatórios.";
    } else {
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $stmt = $conexao->prepare("INSERT INTO usuario (email, senha, sobrenome, nome) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $email, $senha_hash, $sobrenome, $nome);

        if ($stmt->execute()) {
            header("Location: index.html");
            exit;
        } else {
            if ($conexao->errno === 1062) {
                $mensagem = "Erro: Este e-mail já está cadastrado.";
            } else {
                $mensagem = "Erro ao cadastrar o usuário: " . $stmt->error;
            }
        }
        $stmt->close();
    }
    $conexao->close();
}
?>
                <div class="formulario-login">
                    <p><label for="nome">Nome: </label>
                        <input type="text" name="nome" required>
                    </p>
                </div>
                <div class="formulario-login">
                    <p><label for="sobrenome">Sobrenome: </label>
                        <input type="text" name="sobrenome" required>
                    </p>
                </div>
                <div class="formulario-login">
                    <p><label for="email">Email: </label>
                        <input type="email" name="email" required>
                    </p>
                </div>
                <div class="formulario-login">
                    <p><label for="senha">Criar senha:</label>
                        <input type="password" name="senha" required>
                    </p>
                </div>
                <input type="submit" value="ENTRAR">
            </form>
        </div>
    </article>
</body>
</html>

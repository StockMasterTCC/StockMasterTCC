<?php
include_once "helpers/url.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster</title>
    <link rel="stylesheet" href="<?=$BASE_URL?>/stylesheets/stockmaster.css">
    <link rel="icon" href="img/stockmasterIcon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="./js/stockmaster.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include_once "templates/header.php";
    ?>
    <main> 
        <!-- Conteúdo principal aqui -->
        <div class="container">
            <article class="mercadoria">
                <h2>Cadastrar Mercadoria</h2>
                <form action="" method="get">
                <div class="campo-mercadoria">
                    <label for="text">Nome do item:</label><br>
                    <input type="text" id="nome-item" name="nome-item" placeholder="Nome do item" required>
                </div>

                <div class="campo-mercadoria">
                    <label for="text">Fornecedor:</label><br>
                    <input type="text" id="fornecedor" name="fornecedor" placeholder="Nome do fornecedor" required>
                </div>

                <div class="campo-mercadoria">
                    <label for="text" id="categoria">Categoria:</label><br>
                    <input type="text" id="categoria" name="categoria" placeholder="Categoria do produto" required>
                </div>

                <div class="campo-mercadoria">
                    <label for="text">Descrição do produto:</label><br>
                    <input type="text" id="descricao-produto" name="descricao-produto" placeholder="Descrição do produto" required>
                </div>

                <div class="campo-mercadoria campo-data">
                    <label for="data-entrada">Entrada do produto:</label><br>
                    <input type="date" id="data-entrada" name="data-entrada" required>
                </div>

                <div class="campo-mercadoria campo-data">
                    <label for="data-validade">Validade:</label><br>
                    <input type="date" id="data-validade" name="data-validade" required>
                </div>

                <input type="submit" value="Cadastrar item" id="cadastrar-item">
                </form>
            </article>

            <article class="tabela-mercadorias">
                <h2>Lista de mercadoria</h2>
                <table class="tabela-mercadoria">
                    <thead>
                        <tr>
                            <th scope="col">Nome do item</th>
                            <th scope="col">Fornecedor</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Data de Entrada</th>
                            <th scope="col">Data de Validade</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-mercadorias">
                        <!-- As mercadorias cadastradas serão exibidas aqui -->
                    </tbody>
                </table>
            </article>
        </div>
    </main>
</body>

</html>
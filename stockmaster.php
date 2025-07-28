<?php
include_once "helpers/url.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster</title>
    <link rel="stylesheet" href="<?=$BASE_URL?>/stylesheet/stockmaster.css">
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
                <p><label for="text">Nome do item:</label>
                    <input type="text">
                </p>
            </form>
            </article>
        </div>
    </main>
</body>

</html>
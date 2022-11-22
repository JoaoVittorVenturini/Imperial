<?php
    include "connectDB.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Cadastro de Produto</title>
</head>

<body>
    <header>
            <a href="">
                <img src="Logo.svg" alt="">
            </a>
    </header>

    <main>
        <div class="conteudo medio text-center">
            <form action="salvarProduto.php" method="post">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="row">
                    <div class="col">
                        <h1>Cadastro de Produto</h1>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <label for="idProduto"> ID </label>
                        <input type="text" name="id" placeholder="Ex: 982739187311000">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <label for="nomeProduto"> Nome do Produto </label>
                        <input type="text" name="nome" placeholder="Ex: Call of Duty Warzone">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <label for="descProduto"> Descrição </label>
                        <input type="text" name="desc" placeholder="Ex: Jogo Battle Royale Sobrevivência...">
                    </div>
                </div>
        
                <div class="row row cols-2">
                    <div class="col">
                        <label for="valorProduto"> Valor </label>
                        <input type="text" name="valor" placeholder="Ex: R$129,99">
                    </div>
        
                    <div class="col">
                        <label for="devProduto"> Desenvolvedor </label>
                        <input type="text" name="dev" placeholder="Ex: Ubisoft, Epic Games, Rockstar...">
                    </div>
                </div>
        
                <p></p>
        
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar">
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php
            $conn->close();
        ?>
    </footer>
</body>

</html>
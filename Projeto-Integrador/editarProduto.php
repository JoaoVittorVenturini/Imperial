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
                <input type="hidden" name="acao" value="editar">
                <input type="hidden" name="id" value="<?php print $row-> id;?>">
                <div class="row">
                    <div class="col">
                        <h1>Editar Produto</h1>
                    </div>

                <?php
                    $sql = "SELECT * FROM produto WHERE id=".$_REQUEST["id"];
                    $res = $conn->query($sql);
                    $row = $res-> fetch_object();
                ?>

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
                        <input type="text" name="nome" value="<?php print $row->nome;?>">
                    </div>
                </div>
        
                <div class="row">
                    <div class="col">
                        <label for="descProduto"> Descrição </label>
                        <input type="text" name="desc" value="<?php print $row->desc;?>">
                    </div>
                </div>
        
                <div class="row row cols-2">
                    <div class="col">
                        <label for="valorProduto"> Valor </label>
                        <input type="text" name="valor" value="<?php print $row->valor;?>">
                    </div>
        
                    <div class="col">
                        <label for="devProduto"> Desenvolvedor </label>
                        <input type="text" name="dev" value="<?php print $row->dev;?>">
                    </div>
                </div>
        
                <p></p>
        
                <div class="row">
                    <div class="col">
                        <a href="listaProdutos.php"><input type="submit" value="Confirmar"></a>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer>

    </footer>
</body>

</html>
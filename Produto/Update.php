<?php
    include "connectDB.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Editar Produto</title>
</head>

<body>
    <header>
        <a href="">
            <img src="Logo.svg" alt="Logo do time Imperial eSports">
        </a>
    </header>
    
    <?php
      if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM produtos WHERE id = ".$_REQUEST['id'];

        $res = $conn->query($sql);
        
        $row = $res->fetch_object();
      }
    ?>
    <main>
        <div class="conteudo medio text-center">
            <h1 class="titulo">Editar Produto</h1>
            <form action="salvarProduto.php" method="post">
                <input type="hidden" name="acao" value="editar">
                <div class="row">
                    <div class="col">
                        <input type="hidden" name="id" value="<?php print $row->id ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="rua">Nome do Produto</label>
                        <input type="text" name="nome" value="<?php print $row->nome ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="num">Descrição</label>
                        <input type="text" name="desc" value="<?php print $row->descricao ?>">
                    </div>
                    <div class="col">
                        <label for="bairro">Valor</label>
                        <input type="text" name="valor" value="<?php print $row->valor ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="complemento">Desenvolvedor</label>
                        <input type="text" name="dev" value="<?php print $row->idDesenvolvedor ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Salvar">
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
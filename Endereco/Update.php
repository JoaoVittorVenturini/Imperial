<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Cadastro de Funcionário 2/2</title>
</head>

<body>
    <header>
        <a href="../index.html">
            <img src="../img/Logo.svg" alt="Loga do time Imperial eSports">
        </a>
    </header>
    <?php
      include_once("../db/connectDB.php");

      if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM Endereco WHERE id = ".$_REQUEST['id'];

        $res = $conn->query($sql);
        
        $row = $res->fetch_object();
      }
    ?>
    <main>
        <div class="conteudo medio text-center">
            <h1 class="titulo">Editar Endereço</h1>
            <form action="./Actions.php" method="post">
                <input type="hidden" name="acao" value="editar">
                <div class="row">
                    <div class="col">
                        <label for="id">ID</label>
                        <input type="text" name="id" value="<?php print $row->id ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="rua">Rua</label>
                        <input type="text" name="rua" value="<?php print $row->rua ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="num">Numero</label>
                        <input type="text" name="num" value="<?php print $row->numero ?>">
                    </div>
                    <div class="col">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" value="<?php print $row->bairro ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" value="<?php print $row->complemento ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" value="<?php print $row->cidade ?>">
                    </div>
                    <div class="col">
                        <label for="estado">Estado</label>
                        <input type="text" name="estado" value="<?php print $row->estado ?>">
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
<?php
    include "../db/connectDB.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Compra Realizada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header>
        <a href="../index.html">
            <img src="../img/Logo.svg" alt="Logo do time Imperial eSports">
        </a>
    </header>

    <?php
        if(isset($_GET['id'])){
        $sql = "SELECT * FROM produtos WHERE id=".$_REQUEST['id'];

        $res = $conn->query($sql);
    
        $row = $res->fetch_object();
        }
    ?>

    <div class="conteudo medio text-center">
        <div class="row">
            <div class="col">
                <?php
                    print "<p class='alert alert-success'>Sua compra foi bem-sucedida!</p>";
                ?>
            </div>
        </div>

        <p></p>

        <div class="row">
            <div class="col">
                <h1>Nome do Produto</h1>
                <h3><?php print "$row->nome"?></h3>
            </div>
        </div>

        <p></p>

        <div class="row">
            <div class="col">
                <h1>Descrição</h1>
                <h3><?php print "$row->descricao"?></h3>
            </div>
        </div>

        <p></p>

        <div class="row">
            <div class="col">
                <h1>Desenvolvedor</h1>
                <h3><?php print "$row->idDesenvolvedor"?></h3>
            </div>
        </div>

        <p></p>

        <div class="row">
            <div class="col">
                <h1><small>Valor</small></h1>
                <h3><small>R$ <?php print "$row->valor"?></small></h3>
            </div>
        </div>
    </div>
</body>
</html>
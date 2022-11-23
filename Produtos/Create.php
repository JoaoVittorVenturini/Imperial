<?php
    include_once("../db/connectDB.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<title>Cadastro de Produto</title>
</head>

<body>
<header>
<a href="../index.html">
    <img src="../img/Logo.svg" alt="Logo do time Imperial eSports">
</a>
</header>

<main>
<div class="conteudo medio text-center">
<form action="Actions.php" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="row">
        <div class="col">
            <h1>Cadastro de Produto</h1>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="idProduto"> ID </label>
            <input type="text" required name="id" placeholder="982739187311000" minlength="7" maxlength="11">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="nomeProduto"> Nome do Produto </label>
            <input type="text" required name="nome" placeholder="Call of Duty Warzone" minlength="1" maxlength="100">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <label for="descProduto"> Descrição </label>
            <input type="text" name="desc" placeholder="Jogo Battle Royale Sobrevivência..." minlength="1" maxlength="500">
        </div>
    </div>

    <div class="row row cols-2">
        <div class="col">
            <label for="valorProduto"> Valor </label>
            <input type="text" required name="valor" placeholder="R$129,99" minlength="1" maxlength="6">
        </div>

        <div class="col">
            <label for="devProduto"> Desenvolvedor </label>
            <select name="desc" id="desc" style="padding: 0 0.625rem; width: 100%; height: 3.75rem; background-color: #DCDCDC; border: none; border-radius: 8px;">
            <?php
                include_once("connectDB.php");
                $sql = "SELECT * FROM desenvolvedores";
                $res = $conn->query($sql);
                $row = $res->fetch_assoc();

                while($row = $res->fetch_object()){
                    print "<option value=".$row->cnpj."> $row->nome </option>";
                }
            ?>
            </select>
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
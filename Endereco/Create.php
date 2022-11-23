<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Cadastro de Funcionário 1/2</title>
</head>

<body>
    <header>
        <a href="../index.html">
            <img src="../img/Logo.svg" alt="Loga do time Imperial eSports">
        </a>
    </header>
    <main>
        <div class="conteudo medio text-center">
            <h1 class="titulo">Endereço</h1>
            <form action="./Actions.php" method="post">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="row">
                    <div class="col">
                        <label for="id">ID</label>
                        <input type="text" name="id" placeholder="ID do Endereço" minlength="5" maxlength="10">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="rua">Rua</label>
                        <input type="text" name="rua" placeholder="Rua Sergipe" minlength="5" maxlength="100">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="num">Numero</label>
                        <input type="text" name="num" placeholder="142" minlength="1" maxlength="20">
                    </div>
                    <div class="col">
                        <label for="bairro">Bairro</label>
                        <input type="text" name="bairro" placeholder="Centro" minlength="5" maxlength="50">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="complemento">Complemento</label>
                        <input type="text" name="complemento" placeholder="ap:404" minlength="0" maxlength="100">
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <label for="cidade">Cidade</label>
                        <select name="cidade" id="cidade" style="padding: 0 0.625rem; width: 100%; height: 3.75rem; background-color: #DCDCDC; border: none; border-radius: 8px;">
                        <?php
                            include_once("../db/connectDB.php");
                            $cidade = "SELECT * FROM cidade";
                            $res = $conn->query($cidade);
                            $row = $res->fetch_assoc();
                            
                            while($row = $res->fetch_object()){
                                print "<option value='$row->id'> $row->nome </option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div class="col">
                        <label for="estado">Estado</label>
                        <select name="estado" id="estado" style="padding: 0 0.625rem; width: 100%; height: 3.75rem; background-color: #DCDCDC; border: none; border-radius: 8px;">
                            <?php
                                $estado = "SELECT * FROM estado";
                                $result = $conn->query($estado);
                                $linha = $result->fetch_assoc();

                                while($linha = $result->fetch_object()){
                                    print "<option value=\"$linha->id\"> $linha->uf </option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
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

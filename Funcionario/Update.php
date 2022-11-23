<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Editar Funcionário</title>
</head>
<body>
    <header>
        <a href="../index.html">
            <img src="../img/Logo.svg" alt="Loga do time Imperial eSports">
        </a>
    </header>
    <?php
      include_once("../db/connectDB.php");

      if(isset($_GET['cpf'])){
        $cpf = $_GET['cpf'];

        $sql = "SELECT * FROM funcionario WHERE cpf = ".$_REQUEST['cpf'];

        $res = $conn->query($sql);
        
        $row = $res->fetch_object();
      }
    ?>
    <main>
        <div class="conteudo medio text-center">
            <h1 class="titulo">Editar Funcionário</h1>
            <form action="./Actions.php" method="post">
                <input type="hidden" name="acao" value="editar">
                <div class="row">
                    <div class="col">
                        <label for="id">CPF</label>
                        <input type="text" required name="id" value="<?php print $row->cpf ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="nome">Nome</label>
                        <input type="text" required name="nome" value="<?php print $row->nome ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="email">E-mail</label>
                        <input type="email" required name="email" value="<?php print $row->email ?>" minlength="5" maxlength="100" pattern="^[A-Za-z0-9.\-\_]{3,}+@[a-z0-9]{3,}+.(com|com.br|edu.br)$">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" value="<?php print $row->telefone ?>" pattern="^\(?[0-9]{2}+\)? ?[9] ?[0-9]{4}+\-?+[0-9]{4}$">
                    </div>
                    <div class="col">
                        <label for="cargo">Cargo</label>
                        <input type="text" name="cargo" value="<?php print $row->idCargo ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="cidade">ID endereço</label>
                        <select name="cidade" id="cidade" style="padding: 0 0.625rem; width: 100%; height: 3.75rem; background-color: #DCDCDC; border: none; border-radius: 8px;">
                        <?php
                            include_once("../db/connectDB.php");
                            $endereco = "SELECT * FROM endereco";
                            $res = $conn->query($endereco);
                            $row = $res->fetch_assoc();
                            
                            while($row = $res->fetch_object()){
                                print "<option value=\"$row->id\"> $row->rua </option>";
                            }
                        ?>
                        </select>
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

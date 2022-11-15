<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Editar Usuário</title>
</head>
<body>
    <header>
        <a href="#">
            <img src="./img/Logo.svg" alt="Loga do time Imperial eSports">
        </a>
    </header>
    <?php
      include_once("./db/connectDB.php");

      $sql = "SELECT * FROM usuario WHERE id = ".$_REQUEST['id'];

      $res = $conn->query($sql);

      $row = $res->fetch_object();
    ?>
    <main>
        <div class="conteudo medio text-center">
            <h1 class="titulo">Editar Usuário</h1>
            <form action="./salvarUsuario.php" method="post">
                <input type="hidden" name="acao" value="editar">
                <div class="row">
                </div>
                <div class="row">
                    <div class="col">
                        <label for="nome">Nome</label>
                        <input type="text" required name="nome" value="<?php print $row->nome ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="text">Username</label>
                        <input type="text" required name="username" value="<?php print $row->username ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" value="<?php print $row->telefone ?>">
                    </div>
                    <div class="col">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" value="<?php print $row->email ?>">
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
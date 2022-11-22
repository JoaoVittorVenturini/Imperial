<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  <title>Login Imperial</title>
</head>

<body>
  <header>
    <a href="#">
      <img src="./img/Logo.svg" alt="Loga do time Imperial eSports">
    </a>
  </header>
  <main>
    <div class="conteudo medio text-center">
      <h1 class="titulo">Login</h1>
      <form action="./validacaoLogin.php" method="post">
        <div class="row">
          <div class="col">
            <label for="email">E-mail</label>
            <br>
            <input type="text" required name="email" placeholder="Crush ou joaovittor@exemplo.com">
          </div>
        </div>
        <p></p>
        <div class="row">
          <div class="col">
            <label for="senha">Senha</label>
            <br>
            <input type="password" required name="senha" placeholder="•••••••••••••">
            <br>
            <span>Esqueceu a senha? <a href="#"> Clique Aqui </a></span>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <input type="submit" value="Entrar">
          </div>
        </div>
        <p></p>
        <div class="row">
          <div class="col">
            <span>Ainda não tem uma conta?  <a href="./cadastrarUsuario.php">Cadastre-se</a></span>
          </div>
        </div>
        <p></p>
        <div class="row">
          <div class="col">
            <span>Quer Ler os nosso termos? <a href="#">Clique aqui</a></span>
          </div>
        </div>
      </form>
    </div>
  </main>
  <footer>
    
  </footer>
</body>
</html>
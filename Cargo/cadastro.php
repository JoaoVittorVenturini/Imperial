<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="cadastroc.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
  <title>Cadastro de Cargo</title>
</head>
<body>
  <header>
    <a href="index.html">
      <img src="logo.svg" alt="Logo da Imperial (time de eSports)">
    </a>
  </header>

  <div class="conteudo medio">
   <h1 class="titulo">Cadastro de Cargo</h1>
    <form method="POST" action="cadastro.php" >
      <div class="row">
        <div class="col">
          <label for="id">ID</label>
          <input type="text" name="idCargo" placeholder="ex: 20239716">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="nomeCargo">Cargo</label>
          <input type="text" name="nomeCargo" placeholder="ex: Suporte">
        </div>
      </div>      
      <div class="row">
        <div class="col">
          <label for="descricaoCargo">Descrição</label>   
          <textarea name="descricaoCargo" cols="30" rows="10" placeholder="ex: Ajuda no suporte online aos clientes"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="salarioCargo">Salário</label>
          <input type="text" name="salarioCargo" placeholder="ex: 1420,59">
        </div>        
        <div class="col">
          <label for="cargaHorariaCargo">Carga Horária</label>
          <input type="text" name="cargaHorariaCargo" placeholder="ex: 54h semanais">
        </div>
      </div>
          <input type="submit" name="Cadastrar" value="Entrar">
    </form>   
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

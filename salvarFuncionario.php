<?php
  include_once("./db/connectDB.php");
  switch($_REQUEST["acao"]){
    case 'cadastrar':
      $id       = $_POST["id"];
      $nome     = $_POST["nome"];
      $email    = $_POST["email"];
      $telefone = $_POST["telefone"];
      $cargo    = $_POST["cargo"];
      $senha    = $_POST["senha"];
      $senha2   = $_POST["senha2"];

      if($senha == $senha2){
        $sql = "INSERT INTO funcionario (cpf, nome, telefone, email, senha, idCargo) VALUES ('{$id}', '{$nome}', '{$telefone}', '{$email}', '{$senha}', '{$cargo}')";

        $res = $conn->query($sql);
        
        if($res==true){
          print "<script>alert('Funcionário cadastradastrado com sucesso!')</script>";
          print "<script>location.href = './cadastrarEndereco.php'</script>";
        }else{
          echo "<script>alert('Erro ao tentar cadastradastrar!')</script>";
        };
      };
    break;
    case 'editar':
      $id       = $_POST["id"];
      $nome     = $_POST["nome"];
      $email    = $_POST["email"];
      $telefone = $_POST["telefone"];
      $cargo    = $_POST["cargo"];

      $sql = "UPDATE funcionario SET 
        cpf       = '{$id}',
        nome      = '{$nome}',
        email     = '{$email}',
        telefone  = '{$telefone}',
        idCargo   = '{$cargo}'
      WHERE 
        cpf   = $_REQUEST[cpf]";

      $res = $conn->query($sql);
        
        if($res==true){
          print "<script>alert('Funcionário editado com sucesso!')</script>";
          print "<script>location.href = './listaFuncionario.php'</script>";
        }else{
          echo "<script>alert('Erro ao tentar editar funcionario!')</script>";
        };
    break;
    case 'excluir':
      $sql = "DELETE FROM funcionario WHERE cpf = ".$_REQUEST['cpf'];

      $res = $conn->query($sql);
        
      if($res==true){
        print "<script>alert('Funcionário excluido com sucesso!')</script>";
        print "<script>location.href = './listaFuncionario.php'</script>";
      }else{
        echo "<script>alert('Erro ao tentar excluir funcionario!')</script>";
      };
    break;
  }

?>
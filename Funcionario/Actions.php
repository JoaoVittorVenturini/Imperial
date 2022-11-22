<?php
  include_once("../db/connectDB.php");
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

        $vector = str_split($senha); //trasnforma a string em um vetor
        $length = strlen($senha); //verifica o tamanho da string

        $t = "";
        for($i = 0; $i <= $length; $i++){
          $c = ord($vector[$i]) + 18;
          $t = $t.chr($c);
        }
        $senha = $t;

        $sql = "INSERT INTO funcionario (cpf, nome, telefone, email, senha, idCargo) VALUES ('{$id}', '{$nome}', '{$telefone}', '{$email}', '{$senha}', '{$cargo}')";

        $res = $conn->query($sql);
        
        if($res==true){
          print "<script>alert('Funcionário cadastrado com sucesso!')</script>";
          print "<script>location.href = './Read.php'</script>";
        }else{
          print "<script>alert('Erro ao tentar cadastrar!')</script>";
          print "<script>location.href = './Create.php'</script>";
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
        cpf       = $_REQUEST[id]";

      $res = $conn->query($sql);
        
        if($res==true){
          print "<script>alert('Funcionário editado com sucesso!')</script>";
          print "<script>location.href = './Read.php'</script>";
        }else{
          print "<script>alert('Erro ao tentar editar funcionario!')</script>";
        };
    break;
  }
  print "<script>location.href = './Read.php'</script>";
?>
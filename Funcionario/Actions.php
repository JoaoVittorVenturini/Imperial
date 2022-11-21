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

      // regex para validar a senha
      $regexSenha = '/^(?=.*[A-Z])(?=.*[!#@$%&])(?=.*[0-9])(?=.*[a-z]).{10,}$/';

      // regex para validar o email
      $regexEmail = '/^[A-Za-z0-9.\-\_]{3,}+@[a-z0-9]{3,}+.(com|com.br|edu.br)$/';

      if(preg_match($regexSenha, $senha) && preg_match($regexEmail, $email)){
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
            print "<script>location.href = '../Endereco/Create.php'</script>";
          }else{
            print "<script>alert('Erro ao tentar cadastrar!')</script>";
            print "<script>location.href = './Create.php'</script>";
          };
        };
      }
    break;
    case 'editar':
      $id       = $_POST["id"];
      $nome     = $_POST["nome"];
      $email    = $_POST["email"];
      $telefone = $_POST["telefone"];
      $cargo    = $_POST["cargo"];
      
      // regex para validar a senha
      $regexSenha = '/^(?=.*[A-Z])(?=.*[!#@$%&])(?=.*[0-9])(?=.*[a-z]).{10,}$/';

      // regex para validar o email
      $regexEmail = '/^[A-Za-z0-9.\-\_]{3,}+@[a-z0-9]{3,}+.(com|com.br|edu.br)$/';

      if(preg_match($regexEmail, $email)){
        $sql = "UPDATE funcionario SET 
          cpf       = '{$id}',
          nome      = '{$nome}',
          email     = '{$email}',
          telefone  = '{$telefone}',
          idCargo   = '{$cargo}'
        WHERE 
          cpf   = $_REQUEST[id]";
      }

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
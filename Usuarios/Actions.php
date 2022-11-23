<?php
  include "../db/connectDB.php";
  switch($_REQUEST["acao"]){
    case 'cadastrar':
      $nome = $_POST["nome"];
      $username = $_POST["username"];
      $email = $_POST["email"];
      $telefone = $_POST["telefone"];
      $senha = $_POST["senha"];
      $senha2 = $_POST["senha2"];
      
        if($senha == $senha2){
      
        $vector = str_split($senha); 
        $length = strlen($senha); 

        $t = "";
        for($i = 0; $i <= $length; $i++){
          $c = ord($vector[$i]) + 18;
          $t = $t.chr($c);
        }
        $senha = $t;

        $sql = "INSERT INTO usuario (nome, username, email, telefone, senha) VALUES ('{$nome}', '{$username}', '{$email}','{$telefone}', '{$senha}')";

        $res = $conn->query($sql);

        if($res==true){
          print "<script>alert('Usuário cadastrado com sucesso!')</script>";
          print "<script>location.href = './Read.php'</script>";
        }
    else{
        print "<script>alert('Erro ao tentar cadastrar!')</script>";
        print "<script>location.href = './Create.php'</script>";
      };
        }
    print "<script>location.href = './Read.php'</script>";
    break;
    case 'editar':
      $id           = $_POST["id"];
      $nome         = $_POST["nome"];
      $username     = $_POST["username"];
      $email        = $_POST["email"];
      $telefone     = $_POST["telefone"];

      $sql = "UPDATE usuario SET
      nome = '{$nome}',
      username = '{$username}',
      email = '{$email}',
      telefone = '{$telefone}'
      WHERE id = '{$id}'";
      
      $res = $conn->query($sql);

      if($res==true){
          print "<script>alert('Usuário editado com sucesso!')</script>";
      }else{
          echo "<script>alert('erro ao editar usuario.')</script>";
      };
      print "<script>location.href = './Read.php'</script>";
      break;
}
  
?>

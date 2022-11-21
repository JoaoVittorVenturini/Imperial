<?php
  include_once("../db/connectDB.php");

  if(isset($_GET['cpf'])){
    $cpf = $_GET['cpf'];
    $sql = "DELETE FROM funcionario WHERE cpf = ".$cpf;

    $res = $conn->query($sql);

    if($res==true){
      print "<script>alert('Funcionário excluido com sucesso!')</script>";
    }else{
      print "<script>alert('Erro ao tentar excluir funcionario!')</script>";
    };
  }
  print "<script>location.href = './Read.php'</script>";
?>
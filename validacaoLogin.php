<?php
  include './db/connectDB.php';
  if(isset($_POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $vector = str_split($senha); //trasnforma a string em um vetor
    $length = strlen($senha); //verifica o tamanho da string

    $t = "";
    for($i = 0; $i <= $length; $i++){
      $c = ord($vector[$i]) + 18;
      $t = $t.chr($c);
    }
    $senha = $t;

    $sql = "SELECT * FROM funcionario WHERE email='$email' AND senha='$senha'";

    $res = $conn->query($sql);

    $row = $res->fetch_object();
    
    $qtd = $res->num_rows;

    if($qtd == 1){
      print "<script>alert('Usuário logado com sucesso!')</script>";
      print "<script>location.href = './index.html'</script>";
    }else{
      print "<script>alert('Usuário ou senha incorretos!')</script>";
      print "<script>location.href = './login.php'</script>";
    };
  }else{
    print "<script>alert('Usuário não encontrado!')</script>";
    print "<script>location.href = './login.php'</script>";
  };
?>
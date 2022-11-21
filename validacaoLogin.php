<?php
  if(isset($_POST['email'])){
    include './db/connectDB.php';
    $email = $_POST['email'];
    $senhaL = $_POST['senha'];

    $sql = "SELECT * FROM funcionario WHERE email = '$email' LIMIT 1";
    
    $res = $conn->query($sql);

    if($res == true){
      $user = $res->fetch_assoc();

      $vector = str_split($user->senha); //trasnforma a string em um vetor
      $length = strlen($user->senha); //verifica o tamanho da string

      $t = "";
      for($i = 0; $i <= $length; $i++){
        $c = ord($vector[$i]) - 18;
        $t = $t.chr($c);
      }
      $user->senha = $t;

      if($user->senha != $senhaL){
        print "<script>alert('Senha incorreta!')</script>";
        print "<script>location.href = './login.php'</script>";
      }else{
        print "<script>location.href = './index.php'</script>";
      };
    }else{
      print "<script>alert('Erro ao tentar logar!')</script>";
      print "<script>location.href = './login.php'</script>";
    };

    
  }
?>
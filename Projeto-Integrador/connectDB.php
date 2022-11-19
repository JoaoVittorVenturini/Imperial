<?php
  $conn = new MySQLi("localhost","root","","imperial",3306);
  if($conn->connect_errno){
      echo "Erro ao conectar no banco de dados MySQL";
  }else{
      echo "Conectado no banco de dados MySQL";
  }
?>
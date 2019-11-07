<?php
if (!empty($_GET['act'])) {
   $primeiroNome = $_GET['primeiroNome'];
   /* $segundoNome = $_GET['ultimoNome'];
   $nome = $primeiroNome . " " . $ultimoNome; */
   $idade = $_GET['idade'];
   $sql = "INSERT INTO pessoa (nome, idade) values ($primeiroNome , $idade);";
   $result = mysqli_query($conn, $sql);
}

header("Location:index.php");

<?php
include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/main.css">
   <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
   <title>1º jquery</title>

   <script>
      $(document).ready(function() {
         var a = true;
         $("#botao").click(function() {
            $("#escondido").fadeToggle(750);
         });

         $("#botao").click(function() {
            if (a) {
               $("#botao").text("click to close!");
               a = false;
            } else {
               $("#botao").text("click to open!");
               a = true;
            }
         });
      });
   </script>

</head>

<body>

   <?php require "header.html" ?>
   <!-- mostrar base de dados -->
   <?php
   $sql = "select * from pessoa;";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
   if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
         echo $row['nome'] . ": " . $row['idade'] . " anos" . "<br>";
      }
   }
   ?>
   <h1 id="texto">Lorem.</h1>

   <div>
      <p id="botao">click to open!!</p>

      <p id="escondido">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, iusto, voluptatibus quidem
         asperiores deserunt delectus facere ipsa eligendi magnam adipisci sunt obcaecati commodi rerum necessitatibus
         animi totam dolorum hic quos repellendus? Delectus magni veritatis incidunt perspiciatis. Mollitia magnam
         repudiandae tempore, voluptate debitis voluptatem, vero impedit officia sit tenetur asperiores atque hic?
         Labore
         non obcaecati alias deleniti, error voluptas vitae optio perferendis? Eveniet maxime reiciendis eligendi vel
         mollitia odio officiis, tempore perspiciatis fugit aspernatur dolorem vero neque cupiditate culpa, velit atque
         accusantium iste harum repellendus alias, ipsum dolores asperiores dignissimos? Magnam maxime, sunt tempore
         suscipit rerum illum aliquid distinctio? Laborum, in? Nisi iste sunt eius! Unde laborum distinctio veniam
         incidunt, pariatur aliquid quia totam ut molestiae quasi natus numquam. Laboriosam, alias accusamus ab dolore,
         iusto explicabo laborum inventore amet delectus odit, sunt perferendis.</p>
   </div>

   <form action="" method="GET">

      <span>Primeiro Nome: </span> <input class="text" type="text" name="primeiroNome"> <br>

      <span>Ultimo Nome: </span> <input class="text" type="text" name="ultimoNome"> <br>

      <span>Idade: </span> <input class="text" type="text" name="idade"> <br>

      <input class="botao" type="submit" name="submit">

   </form>

   <?php
   $primeiroNome = $_GET['primeiroNome'];
   $ultimoNome = $_GET['ultimoNome'];
   $nome = $primeiroNome . " " . $ultimoNome;
   $idade = $_GET['idade'];
   echo $primeiroNome;
   echo $ultimoNome;
   echo $idade;
   /* $sql = "INSERT INTO pessoa (nome, idade) values ($nome , $idade);";
   $result = mysqli_query($conn, $sql); */

   ?>
</body>



</html>
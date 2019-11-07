<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  <?php include "header.html" ?>
  <div>
    <form action="site.php" method="get">
      1º número: <input type="text" name="num1" required> <br>
      2º número: <input type="text" name="num2" required> <br>
      + <input type="radio" name="op" value="+" checked> <br>
      - <input type="radio" name="op" value="-"> <br>
      <br> <input type="submit" name="submit">
    </form>
  </div>

  <?php
  $op = $_GET["op"];
  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  if ($op == "+") {
    $resposta = $num1 + $num2;
  } else {
    $resposta = $num1 - $num2;
  }
  echo "Resposta: ";
  echo $resposta;
  ?>
  </div>
  <?php include "footer.html" ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="get">
    <label for="">Order Pizza</label>
    <br>
    <br>
    <label for="">quantity: </label>
    <input type="text" name="quantity" value="1">
    <br>
    <br>
    <input type="submit" value="Total">
  </form>
</body>
</html>

<?php 
  $item = "Pizza";
  $price = 5.99;
  $quantity = $_GET["quantity"];
  $total = null;

  $total = $quantity * $price;

  echo "You have ordered ${quantity} x ${item}s <br>";
  echo "The price of ${item} is \${$price} <br>";
  echo "Your total is: \${$total} <br>";
?>
/* 
  for loop = Repeats some code for a certain number of times;

*/

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">Enter a number to countdown from</label>
    <input type="text" name="counter">
    <input type="submit" value="Start">
  </form>
</body>
</html>

<?php 
  $counter = $_POST["counter"];

  for ($i = $counter; $i > 0; $i--) {
    echo $i . "<br>";
  }
?>
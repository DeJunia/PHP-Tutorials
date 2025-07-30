/* 
  Associative array = An array made of key => value pairs
  
  eg.
  countries => capitals
  id => username
  item => price
*/

<?php 
  $capitals = array("USA" => "Washington D.C.", "
                    Japan" => "Kyoto", 
                    "South Korea" => "Seoul", 
                    "India" => "New Delhi");
  
  echo $capitals["USA"] . "<br> <br>"; // => Washington D.C.

  $capitals["USA"] = "Las Vegas"; // modify value
  $capitals["China"] = "Beijing"; // add value
  array_pop( $capitals ); // last pair value removed

  $keys = array_keys( $capitals ); // Fetches the key values
  $values = array_values( $capitals ); // Lists the values
  $cities = array_flip($capitals); // Flips the keys and values, current keys become vlaues and values becomes keys
  $reversedCap = array_reverse( $capitals ); // reverses the data 

  foreach ($capitals as $key => $value) {
    echo $key .": ". $value ."<br>";
  }

  echo "<br> All keys<br>";
  foreach ($keys as $key) {
    echo $key ."<br>";
  }

  echo "<br> All Values<br>";
  foreach ($values as $value) {
    echo $value ."<br>";
  }

  echo "<br> Cities<br>";
  foreach ($cities as $key => $value) {
    echo $key . ": " . $value ."<br>";
  }

  echo "<br> Reversed Capitals<br>";
  foreach ($reversedCap as $key => $value) {
    echo $key . ": " . $value ."<br>";
  }

  echo "<br> Number of Capitals: " . count( $capitals ) ."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="">Enter a country</label>
    <br>
    <input type="text" name="country">
    <input type="submit">
  </form>
</body>
</html>

<?php 
  $capitals = array("USA" => "Washington D.C.", 
                    "Japan" => "Kyoto", 
                    "South Korea" => "Seoul", 
                    "India" => "New Delhi",
                    "Ghana" => "Accra",
                  );
  
 $capital = $capitals[$_POST["country"]];

 echo "The capital is $capital";
?>
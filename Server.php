/* 
  $_SERVER = SGB that contains headers, paths, and script lacations.
             The entries in this array are created by the web server.
             shows nearly everyhting youneed to know about the current web page env. 
*/

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php 
      htmlspecialchars($_SERVER["PHP_SELF"])
  ?>" method="post">
  <label for="">Username:</label> <br>
  <input type="text" name="username">
  <input type="submit" name="login">
  <br>
  <br>  
</form>
</body>
</html>


<?php 

  // foreach($_SERVER as $key => $value) {
  //   echo"". $key ."= ". $value ."<br>";
  // }

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    echo"Yo";
  }
?>

<?php 
  foreach($_SERVER as $key => $value) {
    echo"". $key ."= ". $value ."<br>";
  }
?>
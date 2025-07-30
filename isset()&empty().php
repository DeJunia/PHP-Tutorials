/*
  isset() = Returns True if a variable is declared and not null;
  empty() = Returns True if a variable is not declared, false, null;
*/

<?php 
 $username = "";
 $password = null;

 echo isset($username) . "<br>";
 echo empty($password) . "<br>";

 if (isset($username)) {
    echo "Variable is set <br>"; 
 } else {
  echo "Varaible is not set <br>";
 }
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
    <label for="">Username:</label>
    <br>
    <input type="text" name="username">
    <br>
    <label for="">Password:</label>
    <br>
    <input type="text" name="password">
    <br>
    <input type="submit" name="login" value="LogIn">
    <br>
  </form>
</body>
</html>

<?php 
  if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) ){
      echo "Username is missing <br>";
    } elseif(empty($password) ){
      echo "Password is missing <br>";
    }
    else{
      echo"Hello $username <br> <br>";
    }
  }

  foreach($_POST as $key => $value) {
    echo "$key = $value <br>";
  }
?>
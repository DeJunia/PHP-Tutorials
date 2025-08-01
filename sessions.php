/* 
  session = used to store an information on a user to be used across multiple pages.
            A user is assigned a session-id
            ex. login credentials

            header("Location: home.php") // sends you to the home page
*/

<!------------------Index.php---------------------->
<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  This is the login page
  <form action="index.php" method="post">
    <label for="">Username: </label>
    <input type="text" name="username">
    <label for="">Password: </label>
    <input type="password" name="password">
    <input type="submit" name="login" value="login">
  </form>
  <a href="home.php">This goes to the home page</a>
</body>
</html>

<?php 
  if(isset($_POST["login"])) {
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
      $_SESSION["username"] = $_POST["username"];
      $_SESSION["password"] = $_POST["password"];

      header("Location: home.php");

    } else {
      echo "Invlalid credentials";
    }
  }else {
    echo "";
  }
?>

<!---------------------In the home page -------------->
<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  This is the Home page
  <a href="home.php">This goes to the login page</a>
  <form action="home.php" method="post">
    <input type="submit" name="logout" value="logout">
  </form>
</body>
</html>

<?php 
  echo $_SESSION["username"] . "<br>";
  echo $_SESSION["Password"] . "<br>";

  if(isset($_POST["logout"])){
    session_destroy();
    header("Location: index.php");
  }
?>


/* 
  $_GET, $_POST = Special variables used to collect data from an HTML form data is sent to the file in the action attribute of <form> </form> <form action="some_files.php" method="get">

  $_GET = Data is appended to url 
          Not secure
          char limit
          Bookmark is possible w/ values
          GET request can be cached
          Better for a search page

  $_POST = Data is sent or packaged inside the body of the HTTP request
           More secure
           No char / data limit
           Cannot be bookmarked
           Cannot be cached
           Better for a login page
*/

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <label for="">----Get/Post Method----</label>
  <br>
  <form action="index.php" method="post">
    <label for="">Username:</label>
    <br>
    <input type="text" name="username">
    <br>
    <label for="">Password:</label>
    <br>
    <input type="password" name="password">
    <br>
    <br>
    <input type="submit" value="Login">
    <br>
  </form>
</body>
</html>

<?php
// This is a simple PHP script that processes form data
  echo "<br>" . $_POST["username"] . "<br>";
  echo "{$_POST["password"]} <br>";
  // echo "<br>" . $_GET['username'] . "<br>";
  // echo "{$_GET['password']} <br>";
?>
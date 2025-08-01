/* 
  cookie = Information about a user stored in a user's browser targeted advertisements, browsing preferences, and other non-sensitive data.

  To delete a cookie set time to "-0" setcookie("fav_drink", "malt", time() - 0, "/")
*/

<?php 
  setcookie("fav_food","pizza", time() + (86400 * 2),"/");
  setcookie("fav_drink","coffee", time() + (86400 * 3),"/");
  setcookie("fav_dessert","ice_cream", time() + (86400 * 4),"/");

  foreach($_COOKIE as $key => $value){
    echo"". $key .": ". $value ."<br>";
  }

  if(isset($_COOKIE["fav_drink"])){
    echo"Your favourite drink is {$_COOKIE["fav_drink"]}";
  } else {
    echo "I don't know your favourite drink";
  }
?>
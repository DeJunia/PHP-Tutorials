/* 
  Hashing = transforming sensitive data(password) into letters, numbers, and/or symbols
            via mathematical process. (similar to encryption)
            Hides the original data from 3rd parties.
*/

<?php 

  // foreach($_SERVER as $key => $value) {
  //   echo"". $key ."= ". $value ."<br>";
  // }

  $password = "Pizza123";

  $hash = password_hash($password, PASSWORD_BCRYPT);

  echo$hash;

  if(password_verify("Pizza123", $hash)){
    echo "You are logged in";
  } else {
    echo "Password incorrect";
  }
?>
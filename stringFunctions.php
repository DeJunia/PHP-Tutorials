<?php 
  $username = " Isaac Tuffour ";
  $phone = "123-456-7890";

  $username = strtolower($username); // converts to lower cases
  $username = strtoupper($username); // uppercase
  $username = trim($username); // removes white spaces
  // $username = str_pad($username, 20, "0"); // adds 0 to the available to make it 20
  $phone = str_replace("-", " ", $phone);
  // $username = strrev($username); // reverses the username
  // $username = str_shuffle($username); // shuffle username
  //eaquals = strcmp($username, "Isaac Tuffour") Compares strings
  $count = strlen($phone); // string length
  $index = strpos($phone,"7");
  $firstname = substr($username, 0, 5);
  $lastname = substr($username,5);
  $fullname = explode(" ", $username); // returns string into array
  $name = implode("-", $fullname); //returns array into string

  echo"$username <br>";
  echo"$phone" . "<br>";
  echo$count . "<br>";
  echo$index . "<br>";
  echo$firstname ."<br>";
  echo $lastname ."<br>";

  foreach($fullname as $name) {
    echo "". $name ."<br>";
  }

  echo$name;
?>
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
?>
/* 
  arrays = variable which can hold more than one value at a time
*/

<?php 
  $foods = array("apple", "orange", "banana", "coconut");

  echo $foods[3] . "<br>";
  echo $foods[2] . "<br>";
  echo $foods[1] . "<br>";
  echo $foods[0] . "<br>";

  $foods[1] = "Pineapple";

  array_push( $foods, "banana", "Kiwi", "strawberry" ); //Adds values to the back of the array
  array_pop( $foods ); // removes last value from the array
  array_shift($foods ); // removes first value from the array
  $reversedFoods = array_reverse($foods );

  echo "<br> Listed with for each <br>";
  foreach ($foods as $food) {
    echo $food ."<br>";
  }

  echo "<br> Reversed with for each <br>";
  foreach ($reversedFoods as $food) {
    echo $food ."<br>";
  }

  $number = count($foods);

  echo "toal array items or values $number";
?>
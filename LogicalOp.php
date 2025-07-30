/* 
  && = True if both conditions are True
  || = True if at least one of the conditions is true
  !  = True if false, False if True
  if(condition1 || condition2)
*/

<?php 
  $temp = 5;

  if ($temp < 0 || $temp > 30) {
    echo "The weather is bad";
  } else {
    echo "The weather is good";
  }

  $temp = 5;
  $cloudy = true;

  if ($temp < 0 || $temp > 30) {
    echo "The weather is bad <br>";
  } else {
    echo "The weather is good <br>";
  }

  if (!$cloudy) {
    echo "It's cloudy";
  } else {
    echo "It's sunny";
  }

  $age = 12;
  $isCitizen = true;

  if ($age >= 18 && $isCitizen) {
    echo "You can cast your vote";
  } else {
    echo "You cannot vote";
  }
?>
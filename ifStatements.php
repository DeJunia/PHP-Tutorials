/**
  if statement = if some condition is true, do something 
                 if condition is false, don't do it.
*/

<?php 
  $age = 1001;
   if($age >= 100) {
    echo "You are too old to enter this site";
  }
  elseif($age >= 18) {
    echo "You can access the port";
  } 
  elseif($age <= 0) {
    echo "That wasn't a valid age";
  }
  else {
    echo "You must be 18+ to enter";
  }
?>

<?php 
 $adult = false;

  if($adult === true) {
    echo "You may enter the site";
  } else {
    echo "You must be an adult to enter";
  }
?>

<?php 
  $hours = 50;
  $rate = 15;
  $weekly_pay = null;

  if($hours <= 0) {
    $weekly_pay = 0;
  }
  elseif ($hours <= 40) {
    $weekly_pay = $hours * $rate;
    echo "You made \${$weekly_pay} this week";
  } else {
    $weekly_pay = ($rate * 40) + ($hours - 40) * ($rate * 1.5);
    echo "You made \${$weekly_pay} this week";
  }
?>
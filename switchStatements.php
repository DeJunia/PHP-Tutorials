/* Switch is used to replace if and else statements */

<?php 
  $grade = "ca";

  switch ($grade) {
    case "A":
      echo"You did great";
      break;
    case "B":
      echo"You did good";
      break;
    case "C":
      echo"You did okay";
      break;
    case "D":
      echo "You did poorly";
      break;
    case "F":
      echo "You Failed";
      break;
    default:
      echo "{$grade} is not invalid";
  }
?>

<?php 
  $date = "Friday";
  
  switch ($date) {
    case "Monday":
     echo "I hate " . "$date" . "s!";
     break;
    case "Tuesday":
     echo "It is Taco $date";
     break;
    case "Wednesday":
     echo "The work week is half over";
     break;
    case "Thursday":
     echo "It's almost the weekend";
     break;
    case "Friday":
     echo "The weekend is here";
     break;
    case "Saturday":
     echo "It's time to party";
     break;
    case "Sunday":
     echo "Time to relax";
     break;
    default:
     echo "$date is an invalid day";
  }
?>
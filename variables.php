<?php 
  // Variables
  
  //Strings
  echo "-----------Strings----------- <br>";
  $name = "Isaac Tuffour";
  $food = "Pizza";
  $email = "fake@gmail.com";

  echo "Hello ${name} <br>";
  echo "You like ${food}? <br>";
  echo "Your email is ${email} <br>";

  //integers
  echo "<br>-----------Integers----------- <br>";
  $age = 25;
  $users = 2;
  $quantity = 4;

  echo "My age is ${age} <br>";
  echo "There are ${users} users online <br>";
  echo "Would you like to buy ${quantity} pizzas? <br>";

  //floats
  echo "<br>-----------Floats----------- <br>";
  $gpa = 2.5;
  $price = 9.99;
  $tax_rate = 0.07;

  echo "My GPA is ${gpa} <br>";
  echo "The price of Pizza is \${$price} <br>";
  echo "The tax rate is: ${tax_rate}% <br>";

  //booleans
  echo "<br>-----------Booleans----------- <br>";
  $employed = true;
  $online = false;
  $for_sale = true;

  echo "Online status: ${online} <br>";

  $total = null;

  //Example 
  echo "<br>-----------Example----------- <br>";
  echo "You have ordered ${quantity} x ${food}s <br>";

  $total = $quantity * $price;
  echo "Total: \${$total} <br>";
?>
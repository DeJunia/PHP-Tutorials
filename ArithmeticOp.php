<?php 
  // Arithmetic Operations
  // + - * / ** %  // This section demonstrates basic arithmetic operations in PHP.
  echo "-----------Arithmetic Operations----------- <br>";
  $x = 10;
  $y = 2;
  $z = null;

  $z = $x + $y; // Addition
  echo "Addition: ${x} + ${y} = ${z} <br>";
  // Answer: 12

  $z = $x - $y; // Subtraction
  echo "Subtraction: ${x} - ${y} = ${z} <br>";
  // Answer: 8

  $z = $x * $y; // Multiplication
  echo "Multiplication: ${x} X ${y} = ${z} <br>";
  // Answer: 20

  $z = $x / $y; // Division
  echo "Division: ${x} / ${y} = ${z} <br>";
  // Answer: 5

  $z = $x % $y; // Modulus
  echo "Modulus: ${x} % ${y} = ${z} <br>";
  // Answer: 0 determines the remainder of the division or sometimes even or odd

  $z = $x ** $y; // Exponentiation
  echo "Exponentiation: ${x} ** ${y} = ${z} <br>";
  // Answer: 100


  //Increment and Decrement
  echo "<br>-----------Increment and Decrement----------- <br>";
  $counter = 0;
  // $counter = $counter + 1; // Increment
  $counter++; // Increment using shorthand
  echo "Counter after increment: ${counter} <br>";

  $counter+=2; // Increment by 2
  echo "Counter after increment by 2: ${counter} <br>";

  $counter-=2; // Decrement by 2
  echo "Counter after decrement by 2: ${counter} <br>";

  $counter--; // Decrement using shorthand
  echo "Counter after decrement: ${counter} <br>";
  

  //Operator Precedence
  echo "<br>-----------Operator Precedence----------- <br>";
  // (), **, * / %, + -
  // Parentheses have the highest precedence, followed by exponentiation, multiplication/division/modulus, addition/subtraction
  $total = 1 + 2 - 3 * 4 / 5 ** 6;
  echo "Total: ${total} <br>";
?>
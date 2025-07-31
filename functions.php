/* 
  function = write some code once, reuse when you need it
              type () after function name to invoke.
              ex. add(), subtract(), multiply(), division()

  function func_name() {}
*/

<?php 
  function isEven ($number) {
    return $number % 2;
  }

  echo isEven(11) . "<br>";

  function hypotenuse (float $a, float $b) {
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
  }

  echo round(hypotenuse(4, 6), 2) ."<br>";
?>
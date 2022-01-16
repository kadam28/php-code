<?php //declare(strict_types=1); // strict requirement


function addNumbers(int $a, int $b) {
  echo "<br>";
  return $a + $b;
}
function subNumbers(int $a, int $b) {
  echo "<br>";
  return $a - $b;
}
function mulNumbers(int $a, int $b) {
  echo "<br>";
  return $a * $b;
}
function divNumbers(int $a, int $b) {
  echo "<br>";
  return $a % $b;
}
echo addNumbers(20, 5); 
echo subNumbers(20, 5); 
echo mulNumbers(20, 5); 
echo divNumbers(20, 5); 
?>
<!-- echo addNumbers(5, "5 days");
since strict is enabled and "5 days" is not an integer, an error will be thrown -->
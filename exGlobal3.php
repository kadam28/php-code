<!DOCTYPE html>
<html>
<body>
<?php 
$x = 75;
$y = 25; 
function addition() {
    $x=10;
    $y=10;
 
  echo "variable global X inside function is : ".$GLOBALS['x'];
  echo "<br>";
  echo "variable global y inside function is : ".$GLOBALS['y'];
  echo "<br>";
  echo "variable local X inside function is : ".$x;
  echo "<br>";
  echo "variable local X inside function is : ".$y;
  echo "<br>";

}
addition();

?>
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php 
$x = 75;
$y = 25; 

function addition() {
    $x=10;
    $y=10;
$z=$x+$y;
    //$z=$GLOBALS['X'] + $GLOBALS['Y'];
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
  echo "variable z inside function is : ",$z;
  echo "<br>";
}

addition();
echo $z;
?>

</body>
</html>
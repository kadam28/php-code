<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;

function myTest() {
  $x=10;
  $y=10;
  $y = $x + $y;
  echo "y inside function2 : " . $y;
} 
function myTest2() {
    global $x, $y;
    $y = $x + $y;
    echo "<br> y inside function2 : " . $y;
  } 
  
myTest();  // run function
myTest2();  // run function
echo "<br> y outside function is: " . $y; // output the new value for variable $y

// // PHP also stores all global variables in an array called $GLOBALS[index]
function myTest3() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  }
  
  myTest3();  // run function
 echo $y; // output the new value for variable $y  

?>

</body>
</html>
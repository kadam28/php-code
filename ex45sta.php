<!--each time the function is called, 
that variable will still have the information 
it contained from the last time the 
function was called. -->
<!DOCTYPE html>
<html>
<body>

<?php
function myTest() {
  static $x = 0;
  echo $x;  
  $x++;

}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

</body>
</html>
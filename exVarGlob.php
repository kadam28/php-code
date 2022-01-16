<!DOCTYPE html>
<html>
<body>
<?php
$i = 15; // global scope
 
function myFunction() {
  // using i inside will generate an error
  echo "<h1>Variable i inside function is: $i</h1>";
} 
myFunction();

echo "<h1>Variable i outside function is: $i</h1>";
?>

</body>
</html>
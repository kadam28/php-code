<!DOCTYPE html>
<html>
<body>
 
<?php
echo strlen("Hello world!");
echo"<br><br>";
echo str_word_count("Hello world!"); // outputs 2
echo"<br><br>";
echo strrev("Hello world!"); // outputs !dlrow olleH
echo"<br><br>";
echo strpos("Hello world!", "world"); // outputs 6
echo"<br><br>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
echo"<br><br>";
 
?> 
 
</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Hello \n";
fwrite($myfile, $txt);
$txt = "Welcome to GCE!!\n";
fwrite($myfile, $txt);
fclose($myfile);

echo "file written successfully"
?>

</body>
</html>

<!-- Reexecute code with new data to see changes -->
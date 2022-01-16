<?
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["favcolor"]="Red";
$_SESSION["favanimal"]="Dog";

echo "Session variebles are set now";
?>

</body>
</html>
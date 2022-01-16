<!DOCTYPE html>
<html>
<body>

<form method="post" action="exConne2.php">
  <input type="submit" Value="Connect to MySQL Server">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully with Servername: <b>".$servername."</b> , username as : <b> ".$username."</b> and password is: ";
$conn->close();

}
?>

</body>
</html>
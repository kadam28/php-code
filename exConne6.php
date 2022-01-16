<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <input type="submit" Value="Connect to MySQL Server & Create New table">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myedunet";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
$sql = "CREATE TABLE Student (
    sid INT(6) PRIMARY KEY,
    sname VARCHAR(30) NOT NULL,
    city VARCHAR(30) NOT NULL,
    phone VARCHAR(20)
    )";
if ($conn->query($sql) === TRUE) {
  echo "new table created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();

}
?>

</body>
</html>
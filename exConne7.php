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
$dbname = "Edunet";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";
$sql = "INSERT INTO Student VALUES (11, 'Ankita', 'karad', '955855')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error inserting record: " . $conn->error;
}
/*
$sql = "INSERT INTO Student VALUES (2, 'Akansha', 'karad', '4345')";
$sql .= "INSERT INTO Student VALUES (3, 'Anjali', 'karad', '9455')";
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$conn->close();

}
?>

</body>
</html>
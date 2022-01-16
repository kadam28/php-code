<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"><br>
  City: <input type="text" name="city"><br><br>
  <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    $city= $_REQUEST['city'];
    if(empty($name))
    {
        echo "Please Enter Name";
    }
    else if(empty($city))
    {
        echo "Please Enter city";
    
    } else {
        echo $name . "<br>";
        echo $city . "<br>";
        echo $_SERVER['PHP_SELF'];
    }
}
?>
</body>
</html>
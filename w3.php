<?php
// Create connection
$conn = new mysqli('localhost', 'root', 'vagrant', 'employee');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_REQUEST['submit'])){

$name=$_POST['username'];

$desig=$_POST['pass'];


$sql = "INSERT INTO employee (name, desig)
VALUES ('$name', '$desig')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>


<html>

<title>Sign up</title>
<body>

<h1> sign up page </h1>

<form method="post" enctype="multipart/form-data" >
  
  <input type="text" name="username" placeholder="username">
  <input type="text" name="pass" placeholder="Password">
  <input type="submit" name="submit">
</form>


</body>
</html>
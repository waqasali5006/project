<?php
session_start();

$responce = $_SESSION ['responce'];

if ($responce != 0) {

echo "<h2 class='valid'>You Login may first</h2>";
$responce=1;
}


// Create connection
$conn = new mysqli('localhost', 'root', 'vagrant', 'employee');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_REQUEST['submit'])){

$name=$_POST['name'];

$desig=$_POST['email'];


//Checking is user existing in the database or not
        $query = "SELECT * FROM `employee` WHERE name='$name'
and desig='".md5($desig)."'";
	$result = mysqli_query($conn,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['name'] = $name;
            // Redirect user to index.php
	    header("Location: data.php");
         }
         else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='index.php'>Login</a></div>";
	}
    }
?>


<html>

<head>
	<style type="text/css">
		.valid{font-weight: 20px;
			color: red;
			font-family: sans-serif;
			


		}


	</style>


</head>
<body>
<h1 style="font-family: sans-serif;">Php data handling </h1>
<h2> i am form 2nd user </h2>
<form action="" method="post" enctype="multipart/form-data">

	<input type="text" name="name" required placeholder="Enter name">
	<input type="text" name="email" required placeholder="Email">
	<input type="submit" name="submit">

</form>

</body>
</html>
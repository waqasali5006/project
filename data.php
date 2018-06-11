<?php
session_start();

$name= $_SESSION ['name'];
$email = $_SESSION ['email'];

//echo $name  $email;
 if (isset($_REQUEST['Back'])) {
echo "abc";
session_destroy();
header("location: index.php");
 }


 if (empty($name)) {
 	$_SESSION ['responce'] = 2;

 	header("location: index.php");

 }

echo  $name . " , " . $email;
?>

<!DOCTYPE html>
<html>
<head>
	<title>user data</title>
</head>
<body>
<form>
<input type="submit" name="Back" value="Back"> 
</form>
</body>
</html>
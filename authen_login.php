<?php  
 require('dbconfig.php');
session_start();
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `Users` WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){
header("Location: http://localhost/PokeBuild/PokeBuild/index.php");
$_SESSION['logged_in']= true;
$_SESSION['user'] = $username;
}else{
echo "Invalid Login";
//echo "Invalid Login Credentials";
}
}
?>
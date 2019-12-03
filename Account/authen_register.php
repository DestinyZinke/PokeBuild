<?php  
 require('../PokeBuild/Pokebuild/Sql/dbconfig.php');
 session_start();
if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
	
// Assigning POST values to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = 'INSERT INTO users (username,Password)VALUES ("'.$username.'","'.$password.'")';
mysqli_query($connection, $query) or die(mysqli_error($connection));

$_SESSION['logged_in']= true;
$_SESSION['user']= $username;
header("Location: http://localhost/PokeBuild/PokeBuild/index.php");

// }else{
// echo "Invalid Login";
// //echo "Invalid Login Credentials";
// }
}
?>
<?php include "Include/header.php";?>
<?php
session_start();
//search bar
if(isset($_SESSION['user_id'])){
echo '
<form action = "build.php" method="POST">
<input id="searchbar" name="search" type="text" placeholder="Search...">
<input id="submit" type="submit" value="Search">
</form>';
}else{
    header("Location: http://localhost/PokeBuild/PokeBuild/login.php");
}
//results page
?>
<?php include "Include/results.php";?>
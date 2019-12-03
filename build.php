<?php include "Include/header.php";?>
<?php
//search bar
if(isset($_SESSION['logged_in'])){
echo '
<br />
<br/>
<form action = "build.php" method="POST">
<input id="searchbar" name="search" type="text" placeholder="Search...">
<input id="submit" type="submit" value="Search">
</form>';
}else{
    header("Location: http://localhost/PokeBuild/PokeBuild/login.php");
}
//results page
?>
<?php include "search_result.php";?>
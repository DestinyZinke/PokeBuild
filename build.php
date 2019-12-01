<?php include "Include/header.php";?>
<?php
//search bar
echo '
<form action = "build.php" method="POST">
<input id="searchbar" name="search" type="text" placeholder="Search...">
<input id="submit" type="submit" value="Search">
</form>';
//results page
?>
<?php include "Include/results.php";?>
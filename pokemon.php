<?php include "../PokeBuild/Include/header.php";?>
<?php
//search bar
echo '
<form action = "pokemon.php" method="POST">
<input id="searchbar" name="search" type="text" placeholder="Search...">
<input id="submit" type="submit" value="Search">
</form>';
//results page
?>
<?php include "Subpages/search_result.php";?>
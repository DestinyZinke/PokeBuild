<?php include "Include/header_2.php";?>
<?php
$name = $_GET['name'];
echo "<br /><br/>";
echo $name;
echo "<form action='dex_entry.php?name=".$name."' method='POST'>
<input type='hidden' value='".$name."' name='pokemon-name'>
<input type='submit' value='Add to Team' name='submit'>
</form>";
?>
<?php
include 'Include/create_team.php';
?>
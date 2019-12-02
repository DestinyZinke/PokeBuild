<?php
session_start();
session_destroy();
header("Location: http://localhost/PokeBuild/PokeBuild/index.php");
?>
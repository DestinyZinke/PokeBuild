<?php
session_start();
// $acc = document.getElementsByClassName("accordion");
// for ($i = 0; $i < strlen($acc); $i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var panel = this.nextElementSibling;
//     if (panel.style.display === "block") {
//       panel.style.display = "none";
//     } else {
//       panel.style.display = "block";
//     }
//   });
// }
if(isset($_SESSION['logged_in'])){
echo 
'<nav>
<div class="logo">
</div>
<div class="nav-bar">
<li>
<a href="../PokeBuild/index.php">Home</a>
</li>
<li>
<a href="../PokeBuild/pokemon.php">Pokemon</a>
</li>
<li>
<a href="../PokeBuild/build.php">Team Builder</a>
</li>
<li><a href="account.php">Account</a></li>
<li><a href="teams.php">My Teams</a></li>
<li><a href="logout.php">Log Out</a></li>    
</div>
</nav>';
}else{
    echo 
    '<nav>
    <div class="logo">
    </div>
    <div class="nav-bar">
    <li>
    <a href="../PokeBuild/index.php">Home</a>
    </li>
    <li>
    <a href="../PokeBuild/pokemon.php">Pokemon</a>
    </li>
    <li>
    <a href="../PokeBuild/build.php">Team Builder</a>
    </li>
    <li><a href="account.php">Account</a></li>
    <li><a href="teams.php">My Teams</a></li>
    <li><a href="login">Log In</a></li>    
    </div>
    </nav>'; 
}
?>
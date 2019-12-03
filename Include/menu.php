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
<li class="nav-item">
<a class="nav-link" href="../PokeBuild/index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../PokeBuild/pokemon.php">Pokemon</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../PokeBuild/build.php">Team Builder</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../PokeBuild/Account/account.php">Account</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../PokeBuild/teams.php">My Teams</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../PokeBuild/Account/logout.php">Log Out</a>
</li>    
</div>
</nav>';
}else{
    echo 
    '<nav>
    <div class="logo">
    </div>
    <div class="nav-bar">
    <li class="nav-item">
    <a class="nav-link" href="../PokeBuild/index.php">Home</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../PokeBuild/pokemon.php">Pokemon</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../PokeBuild/build.php">Team Builder</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../PokeBuild/Account/account.php">Account</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../PokeBuild/teams.php">My Teams</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="../PokeBuild/login.php">Log In</a>
    </li>       
    </div>
    </nav>'; 
}
?>
<?php
$name = $_GET['name'];
if(isset($_POST['select-submit'])){
    $selected_team = $_POST['team-select'];
    if($_POST['team-select'] == "New Team"){
        echo '<form action = "add_team.php?name='.$name.'" method="POST">
        <input type = "text" name = "new-team" placeholder="Enter Team Name...">
        <input type = "submit" name = "add-new-team" value="add">
        </form>';
        // header("Location: http://localhost/PokeBuild/PokeBuild/dex_entry.php?".$name);
    }
}
?>
<?php
    require('dbconfig.php');
    session_start();
    $username = $_SESSION['user'];
    $name = $_GET['name'];
    if(isset($_POST['add-new-team'])){
    $team_name = $_POST['new-team'];
    $query = 'INSERT INTO teams (first_pokemon,username,teamName)VALUES ("'.$name.'","'.$username.'","'.$team_name.'")';
    mysqli_query($connection, $query) or die(mysqli_error($connection));
    header("Location: http://localhost/PokeBuild/PokeBuild/dex_entry.php?name=".$name);
}
?>
<?php 
require('dbconfig.php');
if(isset($_POST['pokemon-name'])){
    $name = $_POST['pokemon-name'];
    $moves = "";
    $types = "";
    $query = "SELECT * FROM `Pokemon` WHERE `pokemon_name` = '".$name."'";
    $result = mysqli_query($connection,$query); //$link is the connection
    
    if(mysqli_num_rows($result) > 0 ){
    }else{
        $url = 'https://pokeapi.co/api/v2/pokemon/'.$name;
        $data = file_get_contents($url);
        $json = json_decode($data, true);
        foreach($json['abilities'] as $abilities){
            $moves = $moves.$abilities['ability']['name'].",";
        }
        foreach($json['types'] as $type){
            echo '<br/>';
            $types = $types.$type['type']['name'].",";
        }
        $query = 'INSERT INTO Pokemon (id,pokemon_name, pokemon_type, moves)VALUES ("'.$json['id'].'","'.$name.'","'.$types.'","'.$moves.'")';
        mysqli_query($connection, $query) or die(mysqli_error($connection));

    }

    $username = $_SESSION['user'];
    $query = "SELECT * FROM `teams` WHERE `username` = '".$username."'";
    $result = mysqli_query($connection,$query);
    if(mysqli_num_rows($result) > 0 ){

        echo '<form action="add_team.php?name='.$name.'" method="POST"><select name = "team-select">';
        echo '<option value = "Select">Select</option>';
        echo '<option value="New Team">New Team</option>';
        while($row = $result->fetch_array()){
            echo '<option value="'.$row['teamName'].'">'.$row['teamName'].'</option>';
        }
        echo '</select>
        <input type="submit" name="select-submit" value = "Add"></form>';
        
    }
    // if(isset($_POST['team-select']){
    //     if($_POST['team-select'] == "New Team"){

    //         echo '<form action = "create_team.php" method="POST">
    //         <input type = "text" name = "team-name" placeholder = "Enter Team Name">
    //         <input type = "Submit" value="Submit" name = "Submit">
    //         </form>';
    //     }
    //     if(isset($_POST['team-name'])){
    //         $team= $_POST['team-name'];
    //         $query = 'INSERT INTO teams (username,teamName)VALUES ("'.$username.'","'.$team.'")';
    //     }
    // }
}
?>